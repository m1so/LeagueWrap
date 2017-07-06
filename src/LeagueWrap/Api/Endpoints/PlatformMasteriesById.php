<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class PlatformMasteriesById extends BaseEndpoint {
    protected $urlTemplate = '/lol/platform/v3/masteries/by-summoner/{summonerId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\MasteryPagesDto::class;
    
    protected $returnsDtoArray = false;
}
