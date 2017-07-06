<?php

namespace LeagueWrap\RateLimit;

use Cache\Prefixed\PrefixedCachePool;
use LeagueWrap\Api\Endpoint;
use LeagueWrap\Exceptions\RateLimitReachedException;
use LeagueWrap\Region;
use Psr\Cache\CacheItemPoolInterface;

class AppRateLimiter implements RateLimiter
{
    const CACHE_PREFIX = 'LeagueWrapAppLimit.';

    /**
     * @var PrefixedCachePool
     */
    protected $store;

    /**
     * @var Limits
     */
    protected $limits;

    /**
     * AppRateLimiter constructor.
     *
     * @param CacheItemPoolInterface $cachePool
     * @param array $limits
     */
    public function __construct(CacheItemPoolInterface $cachePool, array $limits)
    {
        $this->store = new PrefixedCachePool($cachePool, self::CACHE_PREFIX);
        $this->limits = new Limits($limits);
    }

    /**
     * Fetch current limit for specified time window.
     * 
     * @param Region $region
     * @param string $timeWindow
     *
     * @return \Psr\Cache\CacheItemInterface
     */
    public function get($region, $timeWindow = '10')
    {
        return $this->store->getItem("{$region->getName()}.{$timeWindow}");
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
        $limitsForRegion = $this->limits->getLimitsForRegion($region);
        
        foreach ($limitsForRegion as $time => $limit) {
            // Get the respective time limit for this region
            $item = $this->get($region, $time);
            
            // No results found, create new count for the limit
            if (! $item->isHit()) {
                $item->set($count)->expiresAfter($time);
                $this->store->save($item);
                continue;
            }
            
            // Otherwise there is a count saved for the region,
            // check if the request count can be performed.
            $currentCount = $item->get();
            if ($count + $currentCount > $limit) {
                $message = "Sending {$count} request".($count === 1 ? '' : 's')." is not allowed! ".
                    "Rate limit for '{$region->getName()}' reached. Current count: {$currentCount}. Limits:".
                    array_reduce(array_keys($limitsForRegion), function ($str, $time) use ($limitsForRegion) {
                        return "{$str} {$limitsForRegion[$time]}/{$time}s";
                    }, '');
                throw new RateLimitReachedException($message);
            }
            
            // If it can, increase the current limit
            $item->set($currentCount + $count);
            $this->store->save($item);
        }
        
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return $this->store->clear();
    }
}
