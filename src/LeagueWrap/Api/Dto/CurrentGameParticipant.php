<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Spectator
 */
class CurrentGameParticipant extends BaseDto {
    /** @var double */
    protected $profileIconId;
    
    /** @var double */
    protected $championId;
    
    /** @var string */
    protected $summonerName;
    
    /** @var Rune[] */
    protected $runes;
    
    /** @var bool */
    protected $bot;
    
    /** @var double */
    protected $teamId;
    
    /** @var double */
    protected $spell2Id;
    
    /** @var Mastery[] */
    protected $masteries;
    
    /** @var double */
    protected $spell1Id;
    
    /** @var double */
    protected $summonerId;
    
    /**
     * @return double
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }
    
    /**
     * @return double
     */
    public function getChampionId()
    {
        return $this->championId;
    }
    
    /**
     * @return string
     */
    public function getSummonerName()
    {
        return $this->summonerName;
    }
    
    /**
     * @return Rune[]
     */
    public function getRunes()
    {
        return $this->runes;
    }
    
    /**
     * @return bool
     */
    public function isBot()
    {
        return $this->bot;
    }
    
    /**
     * @return double
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
    
    /**
     * @return double
     */
    public function getSpell2Id()
    {
        return $this->spell2Id;
    }
    
    /**
     * @return Mastery[]
     */
    public function getMasteries()
    {
        return $this->masteries;
    }
    
    /**
     * @return double
     */
    public function getSpell1Id()
    {
        return $this->spell1Id;
    }
    
    /**
     * @return double
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
    
    /**
     * @param double $profileIconId
     *
     * @return $this
     */
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;
    
        return $this;
    }
    
    /**
     * @param double $championId
     *
     * @return $this
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;
    
        return $this;
    }
    
    /**
     * @param string $summonerName
     *
     * @return $this
     */
    public function setSummonerName($summonerName)
    {
        $this->summonerName = $summonerName;
    
        return $this;
    }
    
    /**
     * @param Rune[] $runes
     *
     * @return $this
     */
    public function setRunes($runes)
    {
        $this->runes = $runes;
    
        return $this;
    }
    
    /**
     * @param bool $bot
     *
     * @return $this
     */
    public function setBot($bot)
    {
        $this->bot = $bot;
    
        return $this;
    }
    
    /**
     * @param double $teamId
     *
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }
    
    /**
     * @param double $spell2Id
     *
     * @return $this
     */
    public function setSpell2Id($spell2Id)
    {
        $this->spell2Id = $spell2Id;
    
        return $this;
    }
    
    /**
     * @param Mastery[] $masteries
     *
     * @return $this
     */
    public function setMasteries($masteries)
    {
        $this->masteries = $masteries;
    
        return $this;
    }
    
    /**
     * @param double $spell1Id
     *
     * @return $this
     */
    public function setSpell1Id($spell1Id)
    {
        $this->spell1Id = $spell1Id;
    
        return $this;
    }
    
    /**
     * @param double $summonerId
     *
     * @return $this
     */
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    
        return $this;
    }
    
}
