<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Spectator
 */
class Rune extends BaseDto {
    /** @var int */
    protected $count;
    
    /** @var double */
    protected $runeId;
    
    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
    
    /**
     * @return double
     */
    public function getRuneId()
    {
        return $this->runeId;
    }
    
    /**
     * @param int $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
    
        return $this;
    }
    
    /**
     * @param double $runeId
     *
     * @return $this
     */
    public function setRuneId($runeId)
    {
        $this->runeId = $runeId;
    
        return $this;
    }
    
}
