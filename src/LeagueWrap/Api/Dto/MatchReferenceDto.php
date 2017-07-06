<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchReferenceDto extends BaseDto {
    /** @var string */
    protected $lane;
    
    /** @var double */
    protected $gameId;
    
    /** @var int */
    protected $champion;
    
    /** @var string */
    protected $platformId;
    
    /** @var int */
    protected $season;
    
    /** @var int */
    protected $queue;
    
    /** @var string */
    protected $role;
    
    /** @var double */
    protected $timestamp;
    
    /**
     * @return string
     */
    public function getLane()
    {
        return $this->lane;
    }
    
    /**
     * @return double
     */
    public function getGameId()
    {
        return $this->gameId;
    }
    
    /**
     * @return int
     */
    public function getChampion()
    {
        return $this->champion;
    }
    
    /**
     * @return string
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }
    
    /**
     * @return int
     */
    public function getSeason()
    {
        return $this->season;
    }
    
    /**
     * @return int
     */
    public function getQueue()
    {
        return $this->queue;
    }
    
    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * @return double
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     * @param string $lane
     *
     * @return $this
     */
    public function setLane($lane)
    {
        $this->lane = $lane;
    
        return $this;
    }
    
    /**
     * @param double $gameId
     *
     * @return $this
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    
        return $this;
    }
    
    /**
     * @param int $champion
     *
     * @return $this
     */
    public function setChampion($champion)
    {
        $this->champion = $champion;
    
        return $this;
    }
    
    /**
     * @param string $platformId
     *
     * @return $this
     */
    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
    
        return $this;
    }
    
    /**
     * @param int $season
     *
     * @return $this
     */
    public function setSeason($season)
    {
        $this->season = $season;
    
        return $this;
    }
    
    /**
     * @param int $queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;
    
        return $this;
    }
    
    /**
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }
    
    /**
     * @param double $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }
    
}
