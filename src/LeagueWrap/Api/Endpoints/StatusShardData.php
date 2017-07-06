<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class StatusShardData extends BaseEndpoint {
    protected $urlTemplate = '/lol/status/v3/shard-data';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = null; // ShardStatus
    
    protected $returnsDtoArray = false;
}
