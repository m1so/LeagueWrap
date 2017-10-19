<?php

namespace LeagueWrap\Tests\Integration;

use LeagueWrap\Results\BatchResult;
use LeagueWrap\Tests\BaseIntegrationTestCase;

class SummonerApiTest extends BaseIntegrationTestCase {
    /** @test */
    public function multiple_summoners_can_be_requested_by_name()
    {
        /** @var BatchResult $results */
        $results = $this->api->summoner()->byName([
            'Yvan Groznyi',
            'Epick',
            'FNC Rekkles',
            'G2 ZV3N',
            'Amazingx',
        ]);
    }
}
