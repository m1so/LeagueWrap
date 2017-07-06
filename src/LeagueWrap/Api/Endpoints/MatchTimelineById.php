<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class MatchTimelineById extends BaseEndpoint {
    protected $urlTemplate = '/lol/match/v3/timelines/by-match/{matchId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\MatchTimelineDto::class;
    
    protected $returnsDtoArray = false;
}
