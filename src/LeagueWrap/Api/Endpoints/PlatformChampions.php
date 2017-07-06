<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class PlatformChampions extends BaseEndpoint {
    protected $urlTemplate = '/lol/platform/v3/champions';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\ChampionDto::class;
    
    protected $returnsDtoArray = true;
}
