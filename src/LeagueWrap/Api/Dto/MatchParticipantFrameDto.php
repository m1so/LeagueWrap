<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchParticipantFrameDto extends BaseDto {
    /** @var int */
    protected $totalGold;
    
    /** @var int */
    protected $teamScore;
    
    /** @var int */
    protected $participantId;
    
    /** @var int */
    protected $level;
    
    /** @var int */
    protected $currentGold;
    
    /** @var int */
    protected $minionsKilled;
    
    /** @var int */
    protected $dominionScore;
    
    /** @var MatchPositionDto */
    protected $position;
    
    /** @var int */
    protected $xp;
    
    /** @var int */
    protected $jungleMinionsKilled;
    
    /**
     * @return int
     */
    public function getTotalGold()
    {
        return $this->totalGold;
    }
    
    /**
     * @return int
     */
    public function getTeamScore()
    {
        return $this->teamScore;
    }
    
    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
    
    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }
    
    /**
     * @return int
     */
    public function getCurrentGold()
    {
        return $this->currentGold;
    }
    
    /**
     * @return int
     */
    public function getMinionsKilled()
    {
        return $this->minionsKilled;
    }
    
    /**
     * @return int
     */
    public function getDominionScore()
    {
        return $this->dominionScore;
    }
    
    /**
     * @return MatchPositionDto
     */
    public function getPosition()
    {
        return $this->position;
    }
    
    /**
     * @return int
     */
    public function getXp()
    {
        return $this->xp;
    }
    
    /**
     * @return int
     */
    public function getJungleMinionsKilled()
    {
        return $this->jungleMinionsKilled;
    }
    
    /**
     * @param int $totalGold
     *
     * @return $this
     */
    public function setTotalGold($totalGold)
    {
        $this->totalGold = $totalGold;
    
        return $this;
    }
    
    /**
     * @param int $teamScore
     *
     * @return $this
     */
    public function setTeamScore($teamScore)
    {
        $this->teamScore = $teamScore;
    
        return $this;
    }
    
    /**
     * @param int $participantId
     *
     * @return $this
     */
    public function setParticipantId($participantId)
    {
        $this->participantId = $participantId;
    
        return $this;
    }
    
    /**
     * @param int $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }
    
    /**
     * @param int $currentGold
     *
     * @return $this
     */
    public function setCurrentGold($currentGold)
    {
        $this->currentGold = $currentGold;
    
        return $this;
    }
    
    /**
     * @param int $minionsKilled
     *
     * @return $this
     */
    public function setMinionsKilled($minionsKilled)
    {
        $this->minionsKilled = $minionsKilled;
    
        return $this;
    }
    
    /**
     * @param int $dominionScore
     *
     * @return $this
     */
    public function setDominionScore($dominionScore)
    {
        $this->dominionScore = $dominionScore;
    
        return $this;
    }
    
    /**
     * @param MatchPositionDto $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = new MatchPositionDto($position);
    
        return $this;
    }
    
    /**
     * @param int $xp
     *
     * @return $this
     */
    public function setXp($xp)
    {
        $this->xp = $xp;
    
        return $this;
    }
    
    /**
     * @param int $jungleMinionsKilled
     *
     * @return $this
     */
    public function setJungleMinionsKilled($jungleMinionsKilled)
    {
        $this->jungleMinionsKilled = $jungleMinionsKilled;
    
        return $this;
    }
    
}
