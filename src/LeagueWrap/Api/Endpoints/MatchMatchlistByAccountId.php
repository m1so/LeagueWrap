<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class MatchMatchlistByAccountId extends BaseEndpoint {
    protected $urlTemplate = '/lol/match/v3/matchlists/by-account/{accountId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\MatchlistDto::class;
    
    protected $returnsDtoArray = false;
}
