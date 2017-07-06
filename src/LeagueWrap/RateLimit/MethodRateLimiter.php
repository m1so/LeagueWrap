<?php

namespace LeagueWrap\RateLimit;

use Cache\Prefixed\PrefixedCachePool;
use LeagueWrap\Api\Endpoint;
use LeagueWrap\Exceptions\RateLimitReachedException;
use Psr\Cache\CacheItemPoolInterface;

class MethodRateLimiter implements RateLimiter
{
    const CACHE_PREFIX = 'LeagueWrapMethodLimit.';

    /**
     * @var PrefixedCachePool
     */
    protected $store;

    /**
     * Overrides the default rate limit for a given endpoint.
     * 
     * @var array
     */
    protected $limits;
    
    public function __construct(CacheItemPoolInterface $cachePool, array $limits)
    {
        $this->store = new PrefixedCachePool($cachePool, self::CACHE_PREFIX);
        $this->limits = $limits;
    }

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
    public function hit(Endpoint $endpoint, $count = 1)
    {
        $region = $endpoint->getRegion();
        
        $rateLimit = isset($this->limits[get_class($endpoint)]) ? $this->limits[get_class($endpoint)] : $endpoint->getLimit();
        
        $time = array_keys($rateLimit)[0];
        $limit = $rateLimit[$time];
        
        // Get the respective time limit for this region
        $item = $this->get($endpoint, $time);

        // No results found, create new count for the limit
        if (! $item->isHit()) {
            $item->set($count)->expiresAfter($time);
            $this->store->save($item);
            
            return true;
        }

        // Otherwise there is a count saved for region+method,
        // check if the request count can be performed.
        $currentCount = $item->get();
        if ($count + $currentCount > $limit) {
            throw new RateLimitReachedException(
                "Sending {$count} request".($count === 1) ? '' : 's'." is not allowed! ".
                "Rate limit for '{$endpoint->getName()}' ({$region->getName()}) reached. ".
                "Current count: {$currentCount}. Limit: {$limit}/{$time}s."
            );
        }

        // If it can, increase the current limit
        $item->set($currentCount + $count);
        $this->store->save($item);
        
        return true;
    }

    /**
     * Fetch current limit for specified time window.
     *
     * @param Endpoint $endpoint
     * @param string $timeWindow
     *
     * @return \Psr\Cache\CacheItemInterface
     */
    public function get($endpoint, $timeWindow = '10')
    {
        return $this->store->getItem("{$endpoint->getRegion()->getName()}.".str_replace(['/', '{', '}'], ['_', '', ''], $endpoint->getName()).".{$timeWindow}");
    }

    /**
     * Deletes all rate limits in the pool.
     *
     * @return bool
     */
    public function clear()
    {
        return $this->store->clear();
    }
}
