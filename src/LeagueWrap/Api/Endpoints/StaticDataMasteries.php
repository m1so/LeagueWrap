<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataMasteries extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/masteries';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\MasteryDto::class;
    
    protected $returnsDtoArray = true;
}
