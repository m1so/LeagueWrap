<?php

namespace LeagueWrap\Api;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use LeagueWrap\Region;

class EndpointFinder
{
    /**
     * @param ResponseInterface $response
     *
     * @return Endpoint
     */
    public static function fromResponse(ResponseInterface $response)
    {
        $name = $response->getHeaderLine('X-Endpoint');
        
        if (! isset(BaseApi::$endpointDefinitions[$name])) {
            throw new \InvalidArgumentException('Could not resolve Endpoint from the provided response: \n'.$response->getBody()->__toString());
        }

        /** @var BaseEndpoint $endpointClass */
        $endpointClass = BaseApi::$endpointDefinitions[$name]['class'];

        return new $endpointClass(Region::create($response->getHeaderLine('X-Region')));
    }

    /**
     * @param RequestInterface $request
     *
     * @return null|Endpoint
     */
    public static function fromRequest(RequestInterface $request)
    {
        if ($request->hasHeader('X-Endpoint')) {
            $name = $request->getHeaderLine('X-Endpoint');
            
            if (! isset(BaseApi::$endpointDefinitions[$name])) {
                throw new \InvalidArgumentException('Could not resolve Endpoint from the request: \n'.$request->getRequestTarget());
            }
            
            /** @var BaseEndpoint $endpointClass */
            $endpointClass = BaseApi::$endpointDefinitions[$name]['class'];

            return new $endpointClass(Region::create($request->getHeaderLine('X-Region')));
        }
        
        $matchingScore = -1;
        /** @var Endpoint $endpointInstance */
        $endpointInstance = null;

        foreach (BaseApi::$endpointDefinitions as $urlTemplate => $definition) {
            $score = levenshtein($request->getRequestTarget(), $urlTemplate);
            if ($score > $matchingScore) {
                $matchingScore = $score;
                $endpointInstance = $definition['instance'];
            }
        }
        
        return $endpointInstance;
    }
}
