<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchPositionDto extends BaseDto {
    /** @var int */
    protected $y;
    
    /** @var int */
    protected $x;
    
    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }
    
    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }
    
    /**
     * @param int $y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;
    
        return $this;
    }
    
    /**
     * @param int $x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;
    
        return $this;
    }
    
}
