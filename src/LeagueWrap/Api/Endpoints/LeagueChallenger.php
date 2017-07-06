<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class LeagueChallenger extends BaseEndpoint {
    protected $urlTemplate = '/lol/league/v3/challengerleagues/by-queue/{queue}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\LeagueDto::class;
    
    protected $returnsDtoArray = true;
}
