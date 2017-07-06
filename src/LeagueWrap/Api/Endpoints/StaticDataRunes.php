<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataRunes extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/runes';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\RuneDto::class;
    
    protected $returnsDtoArray = true;
}
