<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category League
 */
class LeagueItemDto extends BaseDto {
    /** @var string */
    protected $rank;
    
    /** @var bool */
    protected $hotStreak;
    
    /** @var MiniSeriesDto */
    protected $miniSeries;
    
    /** @var int */
    protected $wins;
    
    /** @var bool */
    protected $veteran;
    
    /** @var int */
    protected $losses;
    
    /** @var string */
    protected $playerOrTeamId;
    
    /** @var string */
    protected $playerOrTeamName;
    
    /** @var bool */
    protected $inactive;
    
    /** @var bool */
    protected $freshBlood;
    
    /** @var int */
    protected $leaguePoints;
    
    /**
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }
    
    /**
     * @return bool
     */
    public function isHotStreak()
    {
        return $this->hotStreak;
    }
    
    /**
     * @return MiniSeriesDto
     */
    public function getMiniSeries()
    {
        return $this->miniSeries;
    }
    
    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }
    
    /**
     * @return bool
     */
    public function isVeteran()
    {
        return $this->veteran;
    }
    
    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }
    
    /**
     * @return string
     */
    public function getPlayerOrTeamId()
    {
        return $this->playerOrTeamId;
    }
    
    /**
     * @return string
     */
    public function getPlayerOrTeamName()
    {
        return $this->playerOrTeamName;
    }
    
    /**
     * @return bool
     */
    public function isInactive()
    {
        return $this->inactive;
    }
    
    /**
     * @return bool
     */
    public function isFreshBlood()
    {
        return $this->freshBlood;
    }
    
    /**
     * @return int
     */
    public function getLeaguePoints()
    {
        return $this->leaguePoints;
    }
    
    /**
     * @param string $rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }
    
    /**
     * @param bool $hotStreak
     *
     * @return $this
     */
    public function setHotStreak($hotStreak)
    {
        $this->hotStreak = $hotStreak;
    
        return $this;
    }
    
    /**
     * @param MiniSeriesDto $miniSeries
     *
     * @return $this
     */
    public function setMiniSeries($miniSeries)
    {
        $this->miniSeries = new MiniSeriesDto($miniSeries);
    
        return $this;
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
     * @param bool $veteran
     *
     * @return $this
     */
    public function setVeteran($veteran)
    {
        $this->veteran = $veteran;
    
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
     * @param string $playerOrTeamId
     *
     * @return $this
     */
    public function setPlayerOrTeamId($playerOrTeamId)
    {
        $this->playerOrTeamId = $playerOrTeamId;
    
        return $this;
    }
    
    /**
     * @param string $playerOrTeamName
     *
     * @return $this
     */
    public function setPlayerOrTeamName($playerOrTeamName)
    {
        $this->playerOrTeamName = $playerOrTeamName;
    
        return $this;
    }
    
    /**
     * @param bool $inactive
     *
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;
    
        return $this;
    }
    
    /**
     * @param bool $freshBlood
     *
     * @return $this
     */
    public function setFreshBlood($freshBlood)
    {
        $this->freshBlood = $freshBlood;
    
        return $this;
    }
    
    /**
     * @param int $leaguePoints
     *
     * @return $this
     */
    public function setLeaguePoints($leaguePoints)
    {
        $this->leaguePoints = $leaguePoints;
    
        return $this;
    }
    
}
