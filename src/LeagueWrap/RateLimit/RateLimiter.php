<?php

namespace LeagueWrap\RateLimit;

use LeagueWrap\Api\Endpoint;
use LeagueWrap\Exceptions\RateLimitReachedException;
use Psr\Cache\CacheItemPoolInterface;

interface RateLimiter
{
    public function __construct(CacheItemPoolInterface $cachePool, array $limits);

    /**
     * Try to perform $count hits.
     *
     * @param Endpoint $endpoint
     * @param int $count
     *
     * @throws RateLimitReachedException
     *
     * @return bool
     */
    public function hit(Endpoint $endpoint, $count = 1);

    /**
     * Fetch current limit for specified time window.
     * 
     * @param mixed $identifiable
     * @param string $timeWindow
     *
     * @return \Psr\Cache\CacheItemInterface
     */
    public function get($identifiable, $timeWindow = '10');

    /**
     * Deletes all rate limits in the pool.
     * 
     * @return bool
     */
    public function clear();
}
