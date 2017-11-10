<?php

namespace LeagueWrap\Tests\Unit;

use Cache\Adapter\PHPArray\ArrayCachePool;
use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Exceptions\RateLimitReachedException;
use LeagueWrap\RateLimit\AppRateLimiter;
use LeagueWrap\RateLimit\MethodRateLimiter;
use LeagueWrap\Region;
use PHPUnit\Framework\TestCase;

class RateLimiterTest extends TestCase
{
    /** @test */
    public function app_rate_limiter_simple_usage()
    {
        $limits = [
            '2' => 3,   // 3 in 2s
            '5' => 10, // 10 in 5s
        ];
        $pool = new ArrayCachePool(1000);
        $limiter = new AppRateLimiter($pool, $limits);
        $region = Region::create('euw');
        $endpoint = new DummyEndpoint($region);

        $limiter->hit($endpoint, 1);
        $limiter->hit($endpoint, 2);

        try {
            $limiter->hit($endpoint, 1); // over the limit

            $this->fail();
        } catch (\Exception $e) {
            sleep(2); // next limit should be available now
            $this->assertTrue($limiter->hit($endpoint, 2));
            $this->assertEquals(2, $limiter->get($region, '2')->get());
        }

        // 5s limit has not been reset yet
        sleep(2);
        $this->assertTrue($limiter->hit($endpoint, 2));
        $this->assertEquals(7, $limiter->get($region, '5')->get());
        
        // Both limits are reset now
        sleep(2);
        $this->assertEquals(0, $limiter->get($region, '2')->get());
        $this->assertEquals(0, $limiter->get($region, '5')->get());
    }

    /** @test */
    public function method_rate_limiter_simple_usage()
    {
        $region = Region::create('euw');
        $endpoint = new DummyEndpoint($region); // 5 requests / 2 seconds
        $pool = new ArrayCachePool(10);
        $limiter = new MethodRateLimiter($pool, []);
        
        $limiter->hit($endpoint, 5);
        
        try {
            $limiter->hit($endpoint);
            
            $this->fail();
        } catch (RateLimitReachedException $e) {
            sleep(2);
        }

        // The limit has been reset
        $this->assertTrue($limiter->hit($endpoint));
        $this->assertEquals(1, $limiter->get($endpoint, '2')->get());
    }
}

class DummyEndpoint extends BaseEndpoint {
    protected $rateLimit = ['2' => 5];
    
    protected $urlTemplate = '/dummy/endpoint';
}
