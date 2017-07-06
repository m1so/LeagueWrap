<?php

namespace LeagueWrap\Tests\Integration;

use LeagueWrap\Tests\BaseIntegrationTestCase;

class LeagueApiTest extends BaseIntegrationTestCase
{
    /** @test */
    public function league_fetches_the_challenger_ladder()
    {
        $response = $this->api->league()->getChallenger('RANKED_SOLO_5x5');
        
        $this->assertEquals('RANKED_SOLO_5x5', $response['queue']);
    }

    /** @test */
    public function league_fetches_the_master_ladder()
    {
        $response = $this->api->league()->getMaster('RANKED_SOLO_5x5');

        $this->assertEquals('RANKED_SOLO_5x5', $response['queue']);
    }
}
