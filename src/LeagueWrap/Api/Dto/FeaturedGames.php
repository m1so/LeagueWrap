<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Spectator
 */
class FeaturedGames extends BaseDto {
    /** @var double */
    protected $clientRefreshInterval;
    
    /** @var FeaturedGameInfo[] */
    protected $gameList;
    
    /**
     * @return double
     */
    public function getClientRefreshInterval()
    {
        return $this->clientRefreshInterval;
    }
    
    /**
     * @return FeaturedGameInfo[]
     */
    public function getGameList()
    {
        return $this->gameList;
    }
    
    /**
     * @param double $clientRefreshInterval
     *
     * @return $this
     */
    public function setClientRefreshInterval($clientRefreshInterval)
    {
        $this->clientRefreshInterval = $clientRefreshInterval;
    
        return $this;
    }
    
    /**
     * @param FeaturedGameInfo[] $gameList
     *
     * @return $this
     */
    public function setGameList($gameList)
    {
        $this->gameList = $gameList;
    
        return $this;
    }
    
}
