<?php

namespace LeagueWrap\Api;

use LeagueWrap\Api\Endpoints\MatchById;
use LeagueWrap\Results\BatchResult;
use LeagueWrap\Results\Result;

/**
 * Match v3
 *
 * @method Result|BatchResult byId(integer|array $matchId)
 * @method Result|BatchResult getById(integer|array $matchId)
 */
class Match extends BaseApi
{
    public function byIds(array $ids)
    {
        return $this->getAsync(
            $this->createEndpointsFromIds($ids, MatchById::class)
        );
    }

    public function getByIds(array $ids)
    {
        return $this->byIds($ids);
    }
}
