<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class LeaguePositionById extends BaseEndpoint {
    protected $urlTemplate = '/lol/league/v3/positions/by-summoner/{summonerId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\LeaguePositionDto::class;
    
    protected $returnsDtoArray = true;
}
