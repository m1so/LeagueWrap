<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class SpectatorFeaturedGames extends BaseEndpoint {
    protected $urlTemplate = '/lol/spectator/v3/featured-games';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = null; // FeaturedGames
    
    protected $returnsDtoArray = false;
}
