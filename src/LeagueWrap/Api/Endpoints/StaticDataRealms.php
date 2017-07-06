<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataRealms extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/realms';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\RealmDto::class;
    
    protected $returnsDtoArray = false;
}
