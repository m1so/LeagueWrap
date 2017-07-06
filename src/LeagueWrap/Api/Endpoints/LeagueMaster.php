<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class LeagueMaster extends BaseEndpoint {
    protected $urlTemplate = '/lol/league/v3/masterleagues/by-queue/{queue}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\LeagueDto::class;
    
    protected $returnsDtoArray = true;
}
