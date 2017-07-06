<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Spectator
 */
class Mastery extends BaseDto {
    /** @var double */
    protected $masteryId;
    
    /** @var int */
    protected $rank;
    
    /**
     * @return double
     */
    public function getMasteryId()
    {
        return $this->masteryId;
    }
    
    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }
    
    /**
     * @param double $masteryId
     *
     * @return $this
     */
    public function setMasteryId($masteryId)
    {
        $this->masteryId = $masteryId;
    
        return $this;
    }
    
    /**
     * @param int $rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }
    
}
