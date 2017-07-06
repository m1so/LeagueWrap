<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataMaps extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/maps';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\DataDto::class;
    
    protected $returnsDtoArray = true;
}
