<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category League
 */
class MiniSeriesDto extends BaseDto {
    /** @var int */
    protected $wins;
    
    /** @var int */
    protected $losses;
    
    /** @var int */
    protected $target;
    
    /** @var string */
    protected $progress;
    
    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }
    
    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }
    
    /**
     * @return int
     */
    public function getTarget()
    {
        return $this->target;
    }
    
    /**
     * @return string
     */
    public function getProgress()
    {
        return $this->progress;
    }
    
    /**
     * @param int $wins
     *
     * @return $this
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    
        return $this;
    }
    
    /**
     * @param int $losses
     *
     * @return $this
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    
        return $this;
    }
    
    /**
     * @param int $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->target = $target;
    
        return $this;
    }
    
    /**
     * @param string $progress
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    
        return $this;
    }
    
}
