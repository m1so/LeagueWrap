<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class TeamBansDto extends BaseDto {
    /** @var int */
    protected $pickTurn;
    
    /** @var int */
    protected $championId;
    
    /**
     * @return int
     */
    public function getPickTurn()
    {
        return $this->pickTurn;
    }
    
    /**
     * @return int
     */
    public function getChampionId()
    {
        return $this->championId;
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
     * @param int $championId
     *
     * @return $this
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;
    
        return $this;
    }
    
}
