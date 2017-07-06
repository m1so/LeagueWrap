<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataMasteryById extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/masteries/{id}';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\MasteryDto::class;
    
    protected $returnsDtoArray = false;
}
