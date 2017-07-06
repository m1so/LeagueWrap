<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class ChampionMasteryScoresBySummonerId extends BaseEndpoint {
    protected $urlTemplate = '/lol/champion-mastery/v3/scores/by-summoner/{summonerId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = null; // int
    
    protected $returnsDtoArray = false;
}
