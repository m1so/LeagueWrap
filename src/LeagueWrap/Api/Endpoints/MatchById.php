<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class MatchById extends BaseEndpoint {
    protected $urlTemplate = '/lol/match/v3/matches/{matchId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\MatchDto::class;
    
    protected $returnsDtoArray = false;
}
