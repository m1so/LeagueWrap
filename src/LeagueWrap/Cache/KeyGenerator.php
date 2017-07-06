<?php

namespace LeagueWrap\Cache;

use Http\Client\Common\Plugin\Cache\Generator\CacheKeyGenerator;
use Psr\Http\Message\RequestInterface;
use LeagueWrap\Api\Endpoint;

class KeyGenerator implements CacheKeyGenerator
{
    /**
     * @param string $key
     *
     * @return string
     */
    protected static function generateKey($key)
    {
        return str_replace(
            ["https://", '/', '{', '}'],
            ["", '_', '', ''],
            $key
        );
    }
    
    /**
     * Generate a cache key from a Request.
     *
     * @param RequestInterface $request
     *
     * @return string
     */
    public function generate(RequestInterface $request)
    {
        return static::generateKey($request->getUri()->__toString());
    }

    /**
     * Generate cache key from an Endpoint.
     * 
     * @param Endpoint $endpoint
     *
     * @return string
     */
    public static function fromEndpoint(Endpoint $endpoint)
    {
        return static::generateKey(strtolower($endpoint->getRegion()->getDomain()).$endpoint->getUrl());
    }
}
