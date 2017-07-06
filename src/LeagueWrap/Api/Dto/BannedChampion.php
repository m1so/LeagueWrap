<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Spectator
 */
class BannedChampion extends BaseDto {
    /** @var int */
    protected $pickTurn;
    
    /** @var double */
    protected $championId;
    
    /** @var double */
    protected $teamId;
    
    /**
     * @return int
     */
    public function getPickTurn()
    {
        return $this->pickTurn;
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
    public function getTeamId()
    {
        return $this->teamId;
    }
    
    /**
     * @param int $pickTurn
     *
     * @return $this
     */
    public function setPickTurn($pickTurn)
    {
        $this->pickTurn = $pickTurn;
    
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
     * @param double $teamId
     *
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }
    
}
