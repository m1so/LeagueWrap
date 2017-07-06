<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class SpectatorActiveGamesBySummonerId extends BaseEndpoint {
    protected $urlTemplate = '/lol/spectator/v3/active-games/by-summoner/{summonerId}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = null; // CurrentGameInfo
    
    protected $returnsDtoArray = false;
}
