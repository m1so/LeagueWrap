<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MasteryDto extends BaseDto {
    /** @var int */
    protected $masteryId;
    
    /** @var int */
    protected $rank;
    
    /**
     * @return int
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
     * @param int $masteryId
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
