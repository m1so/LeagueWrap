<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class PlayerDto extends BaseDto {
    /** @var string */
    protected $currentPlatformId;
    
    /** @var string */
    protected $summonerName;
    
    /** @var string */
    protected $matchHistoryUri;
    
    /** @var string */
    protected $platformId;
    
    /** @var double */
    protected $currentAccountId;
    
    /** @var int */
    protected $profileIcon;
    
    /** @var double */
    protected $summonerId;
    
    /** @var double */
    protected $accountId;
    
    /**
     * @return string
     */
    public function getCurrentPlatformId()
    {
        return $this->currentPlatformId;
    }
    
    /**
     * @return string
     */
    public function getSummonerName()
    {
        return $this->summonerName;
    }
    
    /**
     * @return string
     */
    public function getMatchHistoryUri()
    {
        return $this->matchHistoryUri;
    }
    
    /**
     * @return string
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }
    
    /**
     * @return double
     */
    public function getCurrentAccountId()
    {
        return $this->currentAccountId;
    }
    
    /**
     * @return int
     */
    public function getProfileIcon()
    {
        return $this->profileIcon;
    }
    
    /**
     * @return double
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
    
    /**
     * @return double
     */
    public function getAccountId()
    {
        return $this->accountId;
    }
    
    /**
     * @param string $currentPlatformId
     *
     * @return $this
     */
    public function setCurrentPlatformId($currentPlatformId)
    {
        $this->currentPlatformId = $currentPlatformId;
    
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
     * @param string $matchHistoryUri
     *
     * @return $this
     */
    public function setMatchHistoryUri($matchHistoryUri)
    {
        $this->matchHistoryUri = $matchHistoryUri;
    
        return $this;
    }
    
    /**
     * @param string $platformId
     *
     * @return $this
     */
    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
    
        return $this;
    }
    
    /**
     * @param double $currentAccountId
     *
     * @return $this
     */
    public function setCurrentAccountId($currentAccountId)
    {
        $this->currentAccountId = $currentAccountId;
    
        return $this;
    }
    
    /**
     * @param int $profileIcon
     *
     * @return $this
     */
    public function setProfileIcon($profileIcon)
    {
        $this->profileIcon = $profileIcon;
    
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
