<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataItemById extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/items/{id}';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\ItemDto::class;
    
    protected $returnsDtoArray = false;
}
