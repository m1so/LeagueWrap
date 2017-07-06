<?php

namespace LeagueWrap\RateLimit;

use LeagueWrap\Api\Endpoint;
use Psr\Cache\CacheItemPoolInterface;

class VoidRateLimiter implements RateLimiter
{

    public function __construct(CacheItemPoolInterface $cachePool = null, array $limits = [])
    {
        // noop
    }

    public function hit(Endpoint $endpoint, $count = 1)
    {
        // noop
    }

    public function clear()
    {
        // noop
    }
    
    public function get($none, $timeWindow = '10')
    {
        // noop
    }
}
