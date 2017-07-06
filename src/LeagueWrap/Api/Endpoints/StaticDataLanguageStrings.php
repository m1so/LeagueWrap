<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StaticDataLanguageStrings extends BaseEndpoint {
    protected $urlTemplate = '/lol/static-data/v3/language-strings';
    
    protected $isRateLimited = false;
    
    protected $dtoClass = Dto\LanguageStringsDto::class;
    
    protected $returnsDtoArray = false;
}
