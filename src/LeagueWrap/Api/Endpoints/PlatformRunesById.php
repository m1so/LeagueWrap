<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class PlatformRunesById extends BaseEndpoint {
    protected $urlTemplate = '/lol/platform/v3/runes/by-summoner/{summonerId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\RunePagesDto::class;
    
    protected $returnsDtoArray = false;
}
