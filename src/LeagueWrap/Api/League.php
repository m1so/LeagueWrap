<?php

namespace LeagueWrap\Api;

use LeagueWrap\Results\BatchResult;
use LeagueWrap\Results\Result;

/**
 * League v3
 *
 * @method Result|BatchResult byId($id, ...$options)
 * @method Result|BatchResult getById($id, ...$options)
 * 
 * @method Result|BatchResult positionById($id, ...$options)
 * @method Result|BatchResult getPositionById($id, ...$options)
 * 
 * @method Result|BatchResult challenger(string $queue, ...$options)
 * @method Result|BatchResult getChallenger(string $queue, ...$options)
 * 
 * @method Result|BatchResult master(string $queue, ...$options)
 * @method Result|BatchResult getMaster(string $queue, ...$options)
 */
class League extends BaseApi
{
    // Magic™
}
