<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class RuneDto extends BaseDto {
    /** @var int */
    protected $runeId;
    
    /** @var int */
    protected $rank;
    
    /**
     * @return int
     */
    public function getRuneId()
    {
        return $this->runeId;
    }
    
    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }
    
    /**
     * @param int $runeId
     *
     * @return $this
     */
    public function setRuneId($runeId)
    {
        $this->runeId = $runeId;
    
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
