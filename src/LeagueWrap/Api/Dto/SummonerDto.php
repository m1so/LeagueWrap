<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * represents a summoner
 *
 * @category Summoner
 */
class SummonerDto extends BaseDto {
    /** @var int */
    protected $profileIconId;
    
    /** @var string */
    protected $name;
    
    /** @var double */
    protected $summonerLevel;
    
    /** @var double */
    protected $revisionDate;
    
    /** @var double */
    protected $id;
    
    /** @var double */
    protected $accountId;
    
    /**
     * @return int
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return double
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
    }
    
    /**
     * @return double
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }
    
    /**
     * @return double
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return double
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
    
    /**
     * @param int $profileIconId
     *
     * @return $this
     */
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;
    
        return $this;
    }
    
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * @param double $summonerLevel
     *
     * @return $this
     */
    public function setSummonerLevel($summonerLevel)
    {
        $this->summonerLevel = $summonerLevel;
    
        return $this;
    }
    
    /**
     * @param double $revisionDate
     *
     * @return $this
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;
    
        return $this;
    }
    
    /**
     * @param double $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
    /**
     * @param double $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    
        return $this;
    }
    
}
