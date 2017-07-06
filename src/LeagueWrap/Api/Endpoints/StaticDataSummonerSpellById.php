<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataSummonerSpellById extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/summoner-spells/{id}';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\SummonerSpellDto::class;
    
    protected $returnsDtoArray = false;
}
