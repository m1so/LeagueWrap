<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class LeagueById extends BaseEndpoint {
    protected $urlTemplate = '/lol/league/v3/leagues/by-summoner/{summonerId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\LeagueDto::class;
    
    protected $returnsDtoArray = true;
}
