<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains single Champion Mastery information for player and champion combination.
 *
 * @category ChampionMastery
 */
class ChampionMasteryDto extends BaseDto {
    /** @var bool */
    protected $chestGranted;
    
    /** @var int */
    protected $championLevel;
    
    /** @var int */
    protected $championPoints;
    
    /** @var double */
    protected $championId;
    
    /** @var double */
    protected $playerId;
    
    /** @var double */
    protected $championPointsUntilNextLevel;
    
    /** @var double */
    protected $championPointsSinceLastLevel;
    
    /** @var double */
    protected $lastPlayTime;
    
    /**
     * @return bool
     */
    public function isChestGranted()
    {
        return $this->chestGranted;
    }
    
    /**
     * @return int
     */
    public function getChampionLevel()
    {
        return $this->championLevel;
    }
    
    /**
     * @return int
     */
    public function getChampionPoints()
    {
        return $this->championPoints;
    }
    
    /**
     * @return double
     */
    public function getChampionId()
    {
        return $this->championId;
    }
    
    /**
     * @return double
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }
    
    /**
     * @return double
     */
    public function getChampionPointsUntilNextLevel()
    {
        return $this->championPointsUntilNextLevel;
    }
    
    /**
     * @return double
     */
    public function getChampionPointsSinceLastLevel()
    {
        return $this->championPointsSinceLastLevel;
    }
    
    /**
     * @return double
     */
    public function getLastPlayTime()
    {
        return $this->lastPlayTime;
    }
    
    /**
     * @param bool $chestGranted
     *
     * @return $this
     */
    public function setChestGranted($chestGranted)
    {
        $this->chestGranted = $chestGranted;
    
        return $this;
    }
    
    /**
     * @param int $championLevel
     *
     * @return $this
     */
    public function setChampionLevel($championLevel)
    {
        $this->championLevel = $championLevel;
    
        return $this;
    }
    
    /**
     * @param int $championPoints
     *
     * @return $this
     */
    public function setChampionPoints($championPoints)
    {
        $this->championPoints = $championPoints;
    
        return $this;
    }
    
    /**
     * @param double $championId
     *
     * @return $this
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;
    
        return $this;
    }
    
    /**
     * @param double $playerId
     *
     * @return $this
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;
    
        return $this;
    }
    
    /**
     * @param double $championPointsUntilNextLevel
     *
     * @return $this
     */
    public function setChampionPointsUntilNextLevel($championPointsUntilNextLevel)
    {
        $this->championPointsUntilNextLevel = $championPointsUntilNextLevel;
    
        return $this;
    }
    
    /**
     * @param double $championPointsSinceLastLevel
     *
     * @return $this
     */
    public function setChampionPointsSinceLastLevel($championPointsSinceLastLevel)
    {
        $this->championPointsSinceLastLevel = $championPointsSinceLastLevel;
    
        return $this;
    }
    
    /**
     * @param double $lastPlayTime
     *
     * @return $this
     */
    public function setLastPlayTime($lastPlayTime)
    {
        $this->lastPlayTime = $lastPlayTime;
    
        return $this;
    }
    
}
