<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class ChampionMasteryBySummonerIdForChampionId extends BaseEndpoint {
    protected $urlTemplate = '/lol/champion-mastery/v3/champion-masteries/by-summoner/{summonerId}/by-champion/{championId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\ChampionMasteryDto::class;
    
    protected $returnsDtoArray = false;
}
