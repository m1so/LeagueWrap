<?php

namespace LeagueWrap\Cache;

use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\Cache\Generator\CacheKeyGenerator;
use Http\Client\Common\Plugin\Exception\RewindStreamException;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\StreamFactory;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use LeagueWrap\Api\BaseApi;
use LeagueWrap\Api\Endpoint;
use LeagueWrap\Api\EndpointFinder;

class CachePlugin implements Plugin
{
    /** 
     * @var StreamFactory
     */
    protected $streamFactory;
    
    /**
     * @var CacheKeyGenerator
     */
    private $keyGenerator;
    
    /**
     * @var CacheItemPoolInterface
     */
    private $cache;
    /**
     * @var array
     */
    private $options;

    /**
     * CachePlugin constructor.
     *
     * @param CacheItemPoolInterface $cache
     * @param StreamFactory|null $streamFactory
     * @param CacheKeyGenerator $keyGenerator
     * @param array $options
     */
    public function __construct(
        CacheItemPoolInterface $cache,
        StreamFactory $streamFactory = null,
        CacheKeyGenerator $keyGenerator = null,
        array $options
    )
    {
        $this->keyGenerator = $keyGenerator ?: new KeyGenerator();
        $this->streamFactory = $streamFactory ?: StreamFactoryDiscovery::find();
        $this->cache = $cache;
        $this->options = $options;
    }

    /**
     * Handle the request and return the response coming from the next callable.
     *
     * @see http://docs.php-http.org/en/latest/plugins/build-your-own.html
     *
     * @param RequestInterface $request
     * @param callable $next Next middleware in the chain, the request is passed as the first argument
     * @param callable $first First middleware in the chain, used to restart a request
     *
     * @return Promise Resolves a PSR-7 Result or fails with an Http\Client\Exception (The same as HttpAsyncClient).
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        if (strtoupper($request->getMethod()) !== 'GET') {
            $next($request);
        }
        
        $key = $this->keyGenerator->generate($request);
        $cacheItem = $this->cache->getItem($key);

        if ($cacheItem->isHit()) {
            return new FulfilledPromise($this->createResponseFromCacheItem($cacheItem));
        }

        return $next($request)->then(function (ResponseInterface $response) use ($request, $cacheItem) {
            if ($this->isCacheable($response)) {
                $bodyStream = $response->getBody();
                $body = $bodyStream->__toString();
                
                if ($bodyStream->isSeekable()) {
                    $bodyStream->rewind();
                } else {
                    $response = $response->withBody($this->streamFactory->createStream($body));
                }
                
                $cacheItem
                    ->expiresAfter($this->calculateCacheItemTtl($request))
                    ->set([
                        'response' => $response,
                        'body' => $body,
                        'createdAt' => time(),
                    ]);
                
                $this->cache->save($cacheItem);
            }
            
            return $response;
        });
    }

    /**
     * @param CacheItemInterface $cacheItem
     *
     * @return ResponseInterface
     */
    private function createResponseFromCacheItem(CacheItemInterface $cacheItem)
    {
        $data = $cacheItem->get();

        /** @var ResponseInterface $response */
        $response = $data['response'];
        
        $stream = $this->streamFactory->createStream($data['body']);

        try {
            $stream->rewind();
        } catch (\Exception $e) {
            throw new RewindStreamException('Cannot rewind stream.', 0, $e);
        }

        return $response->withBody($stream)->withAddedHeader('X-From-Cache', $data['createdAt']);
    }

    /**
     * Verify that we can cache this response.
     *
     * @param ResponseInterface $response
     *
     * @return bool
     */
    protected function isCacheable(ResponseInterface $response)
    {
        // TODO: Add option to cache 4xx responses
        if (!in_array($response->getStatusCode(), [200, 203, 300, 301, 302])) {
            return false;
        }

        return true;
    }

    /**
     * Calculate how long should the request be cached for.
     * If the $options array from the constructor contains 'endpoints' key
     * with nested fully qualified class name of the Endpoint, 
     * the default TTL is overwritten by the provided value.
     * 
     * @param RequestInterface $request
     *
     * @return int
     */
    protected function calculateCacheItemTtl(RequestInterface $request)
    {
        $endpoint = EndpointFinder::fromRequest($request);
        
        if (isset($this->options['endpoints']) && isset($this->options['endpoints'][get_class($endpoint)])) {
            return $this->options['endpoints'][get_class($endpoint)];
        }

        return $endpoint->getCacheLifeTime();
    }
}
