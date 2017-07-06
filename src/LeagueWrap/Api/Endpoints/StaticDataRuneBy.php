<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataRuneBy extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/runes/{id}';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\RuneDto::class;
    
    protected $returnsDtoArray = false;
}
