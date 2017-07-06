<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class TeamStatsDto extends BaseDto {
    /** @var bool */
    protected $firstDragon;
    
    /** @var bool */
    protected $firstInhibitor;
    
    /** @var TeamBansDto[] */
    protected $bans;
    
    /** @var int */
    protected $baronKills;
    
    /** @var bool */
    protected $firstRiftHerald;
    
    /** @var bool */
    protected $firstBaron;
    
    /** @var int */
    protected $riftHeraldKills;
    
    /** @var bool */
    protected $firstBlood;
    
    /** @var int */
    protected $teamId;
    
    /** @var bool */
    protected $firstTower;
    
    /** @var int */
    protected $vilemawKills;
    
    /** @var int */
    protected $inhibitorKills;
    
    /** @var int */
    protected $towerKills;
    
    /** @var int */
    protected $dominionVictoryScore;
    
    /** @var string */
    protected $win;
    
    /** @var int */
    protected $dragonKills;
    
    /**
     * @return bool
     */
    public function isFirstDragon()
    {
        return $this->firstDragon;
    }
    
    /**
     * @return bool
     */
    public function isFirstInhibitor()
    {
        return $this->firstInhibitor;
    }
    
    /**
     * @return TeamBansDto[]
     */
    public function getBans()
    {
        return $this->bans;
    }
    
    /**
     * @return int
     */
    public function getBaronKills()
    {
        return $this->baronKills;
    }
    
    /**
     * @return bool
     */
    public function isFirstRiftHerald()
    {
        return $this->firstRiftHerald;
    }
    
    /**
     * @return bool
     */
    public function isFirstBaron()
    {
        return $this->firstBaron;
    }
    
    /**
     * @return int
     */
    public function getRiftHeraldKills()
    {
        return $this->riftHeraldKills;
    }
    
    /**
     * @return bool
     */
    public function isFirstBlood()
    {
        return $this->firstBlood;
    }
    
    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
    
    /**
     * @return bool
     */
    public function isFirstTower()
    {
        return $this->firstTower;
    }
    
    /**
     * @return int
     */
    public function getVilemawKills()
    {
        return $this->vilemawKills;
    }
    
    /**
     * @return int
     */
    public function getInhibitorKills()
    {
        return $this->inhibitorKills;
    }
    
    /**
     * @return int
     */
    public function getTowerKills()
    {
        return $this->towerKills;
    }
    
    /**
     * @return int
     */
    public function getDominionVictoryScore()
    {
        return $this->dominionVictoryScore;
    }
    
    /**
     * @return string
     */
    public function getWin()
    {
        return $this->win;
    }
    
    /**
     * @return int
     */
    public function getDragonKills()
    {
        return $this->dragonKills;
    }
    
    /**
     * @param bool $firstDragon
     *
     * @return $this
     */
    public function setFirstDragon($firstDragon)
    {
        $this->firstDragon = $firstDragon;
    
        return $this;
    }
    
    /**
     * @param bool $firstInhibitor
     *
     * @return $this
     */
    public function setFirstInhibitor($firstInhibitor)
    {
        $this->firstInhibitor = $firstInhibitor;
    
        return $this;
    }
    
    /**
     * @param TeamBansDto[] $bans
     *
     * @return $this
     */
    public function setBans($bans)
    {
        foreach ($bans as $key => $dtoData) {
            $this->bans[$key] = new TeamBansDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param int $baronKills
     *
     * @return $this
     */
    public function setBaronKills($baronKills)
    {
        $this->baronKills = $baronKills;
    
        return $this;
    }
    
    /**
     * @param bool $firstRiftHerald
     *
     * @return $this
     */
    public function setFirstRiftHerald($firstRiftHerald)
    {
        $this->firstRiftHerald = $firstRiftHerald;
    
        return $this;
    }
    
    /**
     * @param bool $firstBaron
     *
     * @return $this
     */
    public function setFirstBaron($firstBaron)
    {
        $this->firstBaron = $firstBaron;
    
        return $this;
    }
    
    /**
     * @param int $riftHeraldKills
     *
     * @return $this
     */
    public function setRiftHeraldKills($riftHeraldKills)
    {
        $this->riftHeraldKills = $riftHeraldKills;
    
        return $this;
    }
    
    /**
     * @param bool $firstBlood
     *
     * @return $this
     */
    public function setFirstBlood($firstBlood)
    {
        $this->firstBlood = $firstBlood;
    
        return $this;
    }
    
    /**
     * @param int $teamId
     *
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }
    
    /**
     * @param bool $firstTower
     *
     * @return $this
     */
    public function setFirstTower($firstTower)
    {
        $this->firstTower = $firstTower;
    
        return $this;
    }
    
    /**
     * @param int $vilemawKills
     *
     * @return $this
     */
    public function setVilemawKills($vilemawKills)
    {
        $this->vilemawKills = $vilemawKills;
    
        return $this;
    }
    
    /**
     * @param int $inhibitorKills
     *
     * @return $this
     */
    public function setInhibitorKills($inhibitorKills)
    {
        $this->inhibitorKills = $inhibitorKills;
    
        return $this;
    }
    
    /**
     * @param int $towerKills
     *
     * @return $this
     */
    public function setTowerKills($towerKills)
    {
        $this->towerKills = $towerKills;
    
        return $this;
    }
    
    /**
     * @param int $dominionVictoryScore
     *
     * @return $this
     */
    public function setDominionVictoryScore($dominionVictoryScore)
    {
        $this->dominionVictoryScore = $dominionVictoryScore;
    
        return $this;
    }
    
    /**
     * @param string $win
     *
     * @return $this
     */
    public function setWin($win)
    {
        $this->win = $win;
    
        return $this;
    }
    
    /**
     * @param int $dragonKills
     *
     * @return $this
     */
    public function setDragonKills($dragonKills)
    {
        $this->dragonKills = $dragonKills;
    
        return $this;
    }
    
}
