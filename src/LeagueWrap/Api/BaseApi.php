<?php

namespace LeagueWrap\Api;

use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Psr\Http\Message\ResponseInterface;
use LeagueWrap\Api\Endpoint;
use LeagueWrap\Cache\KeyGenerator;
use LeagueWrap\Client as RiotApi;
use LeagueWrap\Exceptions\RateLimitReachedException;
use LeagueWrap\Http\Response\Transformer;
use LeagueWrap\Region;
use LeagueWrap\Results\BatchResult;
use LeagueWrap\Results\Result;

abstract class BaseApi
{
    /**
     * @var RiotApi
     */
    protected $client;

    /**
     * @var Region
     */
    protected $region;

    /**
     * Full class names (including namespace) of all endpoints.
     * 
     * @var string[]
     */
    public static $endpointClasses = [];

    /**
     * List of categories from the LeagueWrap Dev Portal sidebar for API v3.
     * For example: Match, Summoner, ...
     * 
     * @var string[]
     */
    public static $endpointDefinitions = [];

    /**
     * Base API constructor.
     *
     * @param RiotApi $client
     * @param Region $region
     */
    public function __construct(RiotApi $client, Region $region)
    {
        $this->client = $client;
        $this->region = $region;

        if (count(self::$endpointClasses) === 0 && count(self::$endpointDefinitions) === 0) {
            $this->loadAllEndpoints();
        }
    }

    /**
     * @param \LeagueWrap\Api\Endpoint $endpoint
     * @param array $options
     *
     * @return \Psr\Http\Message\RequestInterface
     */
    protected function buildRequest(Endpoint $endpoint, $options = [])
    {
        $uri = UriFactoryDiscovery::find()->createUri($endpoint->getUrl());
        
        return MessageFactoryDiscovery::find()
            ->createRequest(
                'GET',
                count($options) > 0 ? $uri->withQuery(preg_replace('/%5B[0-9]+%5D/simU', '', http_build_query($options))) : $uri
            );
    }

    /**
     * Perform one or more async requests.
     * 
     * @param Endpoint[] $endpoints
     * @param array $params
     *
     * @return Result|BatchResult
     */
    protected function getAsync(array $endpoints, $params = [])
    {
        /** @var Promise[] $promises */
        $promises = array_map(function (Endpoint $endpoint) use ($params) {
            $isCached = $this->client->getCache() && $this->client->getCache()->getItem(KeyGenerator::fromEndpoint($endpoint))->isHit();
            
            if ($endpoint->countsTowardsLimit() && !$isCached) {
                try {
                    $this->client->getMethodRateLimiter()->hit($endpoint);
                    $this->client->getAppRateLimiter()->hit($endpoint);
                } catch (RateLimitReachedException $e) {
                    return new RejectedPromise($e);
                }
            }

            return $this->client->getHttpClient()
                ->sendAsyncRequest($this->buildRequest($endpoint, $params))
                ->then(function (ResponseInterface $response) use ($endpoint) {
                    return $response
                        ->withHeader('X-Endpoint', $endpoint->getName())
                        ->withHeader('X-Request', $endpoint->getUrl())
                        ->withHeader('X-Region', $endpoint->getRegion()->getName());
                });
        }, is_array($endpoints) ? $endpoints : [$endpoints]);

        // Wait for multiple requests to complete, even if some fail
        if (count($promises) > 1) {
            $results = \GuzzleHttp\Promise\settle($promises)->wait();

            return BatchResult::fromSettledPromises($results);
        }

        // Resolve a single request
        $result = $promises[0]->wait();

        if (! $result instanceof ResponseInterface) {
            throw $result;
        }

        return Result::fromPsr7($result);
    }

    protected function createEndpointsFromIds($ids, $endpointClass, $additionalArguments = [])
    {
        return array_map(function ($id) use ($endpointClass, $additionalArguments) {
            $identifiers = $additionalArguments;
            $identifiers[0] = $id;
            
            return new $endpointClass($this->region, $identifiers);
        }, is_array($ids) ? $ids : [$ids]);
    }

    /**
     * Load all available endpoints as an array of full class names with namespace strings.
     * The endpoints are contained within a folder structure that is only 1 level deep.
     */
    private function loadAllEndpoints()
    {
        self::$endpointClasses = array_map(function ($classPath) {
            // For ./Api/Endpoints/MatchById -> ('MatchById.php')
            list($endpointClass) = array_slice(explode('/', $classPath), -1, 1);
            
            // Build the full class name with namespace
            $fullClassName = join('\\', [__NAMESPACE__, 'Endpoints', str_replace('.php', '', $endpointClass)]);
            
            /** @var Endpoint $endpoint */
            $endpoint = new $fullClassName($this->region);
            
            self::$endpointDefinitions[$endpoint->getName()] = [
                'class' => $fullClassName,
                'instance' => $endpoint,
            ];
            
            return $fullClassName;
        }, glob(__DIR__.'/Endpoints/*.php'));
    }

    /**
     * Magic™ method to access all v3 endpoints.
     *
     * @param $name
     * @param $arguments
     *
     * @throws \Exception
     *
     * @return Result|BatchResult
     */
    public function __call($name, $arguments)
    {
        $namespacedClassName = get_class($this);

        // Convert current class name to class name without the namespace part
        $class = ($pos = strrpos($namespacedClassName, '\\')) ? substr($namespacedClassName, $pos + 1) : $pos;

        // Call the endpoint either by 'Match::getById' or by 'Match::byId'
        $name = substr($name, 0, 3) === 'get' ? substr_replace($name, $class, 0, 3) : $name;
        $name = strpos(strtolower($name), strtolower($class)) !== false ? $name : $class.$name;

        // Build up the namespace + class name for the endpoint ($class refers to the category here)
        $endpointClass = join('\\', array_filter([__NAMESPACE__, 'Endpoints', $name]));

        // Check if the requested endpoint is actually implemented
        if (! is_subclass_of($endpointClass, Endpoint::class)) {
            throw new \Exception("Class '{$endpointClass}' is not a subclass of 'Endpoint'. Undefined method called: {$namespacedClassName}::{$name}");
        }
        
        // Argument parsing
        $argCount = count($arguments);
        $hasOptions = $argCount > 1 && is_array($arguments[$argCount - 1]);
        $options = $hasOptions ? $arguments[count($arguments) - 1] : [];
        $ids = array_slice($arguments, 1, $argCount - 1, true);

        return $this->getAsync(
            $this->createEndpointsFromIds($arguments[0], $endpointClass, $ids),
            $options
        );
    }
}
