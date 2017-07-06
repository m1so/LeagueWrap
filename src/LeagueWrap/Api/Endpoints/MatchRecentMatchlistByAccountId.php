<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class MatchRecentMatchlistByAccountId extends BaseEndpoint {
    protected $urlTemplate = '/lol/match/v3/matchlists/by-account/{accountId}/recent';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\MatchlistDto::class;
    
    protected $returnsDtoArray = false;
}
