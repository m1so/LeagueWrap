<?php

namespace LeagueWrap\RateLimit;

use LeagueWrap\Region;

class Limits
{
    protected $limits = [];

    public function __construct($limits)
    {
        foreach (Region::PLATFORM_IDS as $regionName => $platformId) {
            foreach ($limits as $time => $limit) {
                $this->limits[$regionName][$time] = $limit;
            }
        }
    }
    
    public function getLimitsForRegion($region)
    {
        return $this->limits[Region::create($region)->getName()];
    }
}
