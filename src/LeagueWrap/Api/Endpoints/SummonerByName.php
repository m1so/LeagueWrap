<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class SummonerByName extends BaseEndpoint {
    protected $urlTemplate = '/lol/summoner/v3/summoners/by-name/{summonerName}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\SummonerDto::class;
    
    protected $returnsDtoArray = false;
}
