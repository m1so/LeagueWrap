<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchTimelineDto extends BaseDto {
    /** @var MatchFrameDto[] */
    protected $frames;
    
    /** @var double */
    protected $frameInterval;
    
    /**
     * @return MatchFrameDto[]
     */
    public function getFrames()
    {
        return $this->frames;
    }
    
    /**
     * @return double
     */
    public function getFrameInterval()
    {
        return $this->frameInterval;
    }
    
    /**
     * @param MatchFrameDto[] $frames
     *
     * @return $this
     */
    public function setFrames($frames)
    {
        foreach ($frames as $key => $dtoData) {
            $this->frames[$key] = new MatchFrameDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param double $frameInterval
     *
     * @return $this
     */
    public function setFrameInterval($frameInterval)
    {
        $this->frameInterval = $frameInterval;
    
        return $this;
    }
    
}
