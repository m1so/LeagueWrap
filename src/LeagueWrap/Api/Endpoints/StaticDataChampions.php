<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataChampions extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/champions';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\ChampionDto::class;
    
    protected $returnsDtoArray = true;
}
