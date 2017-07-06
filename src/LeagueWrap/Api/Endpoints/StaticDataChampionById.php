<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataChampionById extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/champions/{id}';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\ChampionDto::class;
    
    protected $returnsDtoArray = false;
}
