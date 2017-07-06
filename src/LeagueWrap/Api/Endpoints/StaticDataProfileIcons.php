<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataProfileIcons extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/profile-icons';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\ProfileIconDataDto::class;
    
    protected $returnsDtoArray = false;
}
