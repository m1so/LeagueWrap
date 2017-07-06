<?php

namespace LeagueWrap\Tests\Integration;

use Cache\Adapter\PHPArray\ArrayCachePool;
use LeagueWrap\Api\Endpoints\MatchById;
use LeagueWrap\Region;
use LeagueWrap\Tests\BaseIntegrationTestCase;
use LeagueWrap\Tests\IntegrationAssertionTrait;

class MatchApiTest extends BaseIntegrationTestCase
{
    use IntegrationAssertionTrait;
    
    /** @test Provide access to `match v3` endpoint. */
    public function match_endpoint_returns_a_single_match()
    {
        $result = $this->api->match()->getById(3152860584);

        $this->assertEquals(3152860584, $result['gameId']);
    }

    /** @test Provide an alternative way to access `match v3` endpoint. */
    public function match_endpoint_with_alternative_call_returns_a_single_match()
    {
        $result = $this->api->match()->byId(3152860584);

        $this->assertEquals(3152860584, $result['gameId']);
    }
    
    /** @test Batch calls for `match v3` */
    public function multiple_matches_through_a_batch_call()
    {
        $result = $this->api->match()->byIds([
            3152860584,
            3152860584,
            3152860584,
            3152860584,
        ]);

        $this->assertBatchResponse($result);
        $this->assertCount(4, $result->getResponses());
        $this->assertEquals(3152860584, $result->getData()[0]['gameId']);
    }

    /** @test Batch calls for `match v3` the alternative way */
    public function multiple_matches_through_a_batch_call_with_alternative_call()
    {
        $result = $this->api->match()->byId([
            3152860584,
            3152860584,
        ]);

        $this->assertBatchResponse($result);
        $this->assertCount(2, $result->getResponses());
        $this->assertEquals(3152860584, $result->getData()[0]['gameId']);
    }

    /** @test */
    public function rate_limited_matches_with_app_limits()
    {
        $cache = [];
        $pool = new ArrayCachePool(1000, $cache);
        
        $this->api->setAppLimits([
            '10' => 2,
        ], $pool);

        $result = $this->api->match()->byIds([
            3152860584,
            3152860584,
            3152860584, // rate limit is 2 so these calls won't get executed
            3152860584,
        ]);
        
        $this->assertCount(2, $result->getResponses());
        $this->assertEquals(3152860584, $result->getData()[0]['gameId']);
        $this->assertEquals(3152860584, $result->getData()[1]['gameId']);
    }

    /** @test */
    public function rate_limited_matches_with_method_limit()
    {
        $cache = [];
        $pool = new ArrayCachePool(1000, $cache);
        
        $this->api->setMethodLimits([
            MatchById::class => ['2' => 3], // 3 requests / 10 seconds
        ], $pool);

        $result = $this->api->match()->byIds([
            3152860584,
            3152860584,
            3152860584,
            3152860584, // rate limit is 3 so these calls won't get executed
        ]);

        $this->assertCount(3, $result->getResponses());
        $this->assertEquals(3152860584, $result->getData()[0]['gameId']);
        $this->assertEquals(3152860584, $result->getData()[1]['gameId']);
        $this->assertEquals(3152860584, $result->getData()[2]['gameId']);
    }

    /** @test */
    public function rate_limited_matches_with_app_and_method_limits()
    {
        $cache = [];
        $pool = new ArrayCachePool(1000, $cache);

        $this->api->setAppLimits([
            '10' => 100,
        ], $pool);

        $this->api->setMethodLimits([
            MatchById::class => ['2' => 3], // 3 requests / 10 seconds
        ], $pool);

        $result = $this->api->match()->byIds([
            3152860584,
            3152860584,
            3152860584,
            3152860584, // rate limit is 3 so these calls won't get executed
        ]);

        $this->assertCount(3, $result->getResponses());
        $this->assertEquals(3152860584, $result->getData()[0]['gameId']);
        $this->assertEquals(3152860584, $result->getData()[1]['gameId']);
        $this->assertEquals(3152860584, $result->getData()[2]['gameId']);
    }

    /** @test */
    public function rate_limited_matches_with_method_and_app_limits()
    {
        $cache = [];
        $pool = new ArrayCachePool(1000, $cache);

        $this->api->setAppLimits([
            '10' => 3,
        ], $pool);

        $this->api->setMethodLimits([
            MatchById::class => ['10' => 500],
        ], $pool);

        $result = $this->api->match()->byIds([
            3152860584,
            3152860584,
            3152860584,
            3152860584, // rate limit is 3 so these calls won't get executed
        ]);

        $this->assertCount(3, $result->getResponses());
        $this->assertEquals(3152860584, $result->getData()[0]['gameId']);
        $this->assertEquals(3152860584, $result->getData()[1]['gameId']);
        $this->assertEquals(3152860584, $result->getData()[2]['gameId']);
    }

    /** @test */
    public function rate_limited_matches_with_limits_and_caching_by_single_request()
    {
        $cache = [];
        $pool = new ArrayCachePool(1000, $cache);

        $this->api->addCache($pool)
            ->setAppLimits([
                '10' => 2,
            ], $pool)
            ->setMethodLimits([
                MatchById::class => ['10' => 500],
            ], $pool);

        $this->api->match()->byId(3152860584);
        $this->api->match()->byId(3152860584);
        $this->api->match()->byId(3152860584);
        
        $this->assertEquals(1, $this->api->getAppRateLimiter()->get(Region::create('euw'), '10')->get());
        
        $this->api->removeCache();
    }

    /** @test */
    public function rate_limited_matches_with_limits_and_caching_by_batch_request_gotcha()
    {
        $cache = [];
        $pool = new ArrayCachePool(1000, $cache);

        $this->api->addCache($pool)
            ->setAppLimits([
                '10' => 3,
            ], $pool)
            ->setMethodLimits([
                MatchById::class => ['10' => 500],
            ], $pool);

        $this->api->match()->byIds([3152860584, 3152860584, 3152860584, 3152860584, 3152860584, 3152860584]);

        // See the 'Gotchas' section in README
        $this->assertEquals(3, $this->api->getAppRateLimiter()->get(Region::create('euw'), '10')->get());

        $this->api->removeCache();
    }
}
