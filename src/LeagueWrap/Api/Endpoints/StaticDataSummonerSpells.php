<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataSummonerSpells extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/summoner-spells';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\SummonerSpellDto::class;
    
    protected $returnsDtoArray = true;
}
