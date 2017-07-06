<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataVersions extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/versions';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = null; // string[]
    
    protected $returnsDtoArray = true;
}
