<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Tournament
 */
class LobbyEventDto extends BaseDto {
    /** @var string */
    protected $eventType;
    
    /** @var string */
    protected $summonerId;
    
    /** @var string */
    protected $timestamp;
    
    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }
    
    /**
     * @return string
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
    
    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    
        return $this;
    }
    
    /**
     * @param string $summonerId
     *
     * @return $this
     */
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    
        return $this;
    }
    
    /**
     * @param string $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }
    
}
