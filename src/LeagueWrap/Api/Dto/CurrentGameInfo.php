<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Spectator
 */
class CurrentGameInfo extends BaseDto {
    /** @var double */
    protected $gameId;
    
    /** @var double */
    protected $gameStartTime;
    
    /** @var string */
    protected $platformId;
    
    /** @var Enum\GameMode::CLASSIC|Enum\GameMode::ODIN|Enum\GameMode::ARAM|Enum\GameMode::TUTORIAL|Enum\GameMode::ONEFORALL|Enum\GameMode::ASCENSION|Enum\GameMode::FIRSTBLOOD|Enum\GameMode::KINGPORO|Enum\GameMode::SIEGE|Enum\GameMode::ASSASSINATE|Enum\GameMode::ARSR|Enum\GameMode::DARKSTAR */
    protected $gameMode;
    
    /** @var double */
    protected $mapId;
    
    /** @var Enum\GameType::CUSTOM_GAME|Enum\GameType::TUTORIAL_GAME|Enum\GameType::MATCHED_GAME */
    protected $gameType;
    
    /** @var BannedChampion[] */
    protected $bannedChampions;
    
    /** @var Observer */
    protected $observers;
    
    /** @var CurrentGameParticipant[] */
    protected $participants;
    
    /** @var double */
    protected $gameLength;
    
    /** @var double */
    protected $gameQueueConfigId;
    
    /**
     * @return double
     */
    public function getGameId()
    {
        return $this->gameId;
    }
    
    /**
     * @return double
     */
    public function getGameStartTime()
    {
        return $this->gameStartTime;
    }
    
    /**
     * @return string
     */
    public function getPlatformId()
    {
        return $this->platformId;
    }
    
    /**
     * @return Enum\GameMode::CLASSIC|Enum\GameMode::ODIN|Enum\GameMode::ARAM|Enum\GameMode::TUTORIAL|Enum\GameMode::ONEFORALL|Enum\GameMode::ASCENSION|Enum\GameMode::FIRSTBLOOD|Enum\GameMode::KINGPORO|Enum\GameMode::SIEGE|Enum\GameMode::ASSASSINATE|Enum\GameMode::ARSR|Enum\GameMode::DARKSTAR
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }
    
    /**
     * @return double
     */
    public function getMapId()
    {
        return $this->mapId;
    }
    
    /**
     * @return Enum\GameType::CUSTOM_GAME|Enum\GameType::TUTORIAL_GAME|Enum\GameType::MATCHED_GAME
     */
    public function getGameType()
    {
        return $this->gameType;
    }
    
    /**
     * @return BannedChampion[]
     */
    public function getBannedChampions()
    {
        return $this->bannedChampions;
    }
    
    /**
     * @return Observer
     */
    public function getObservers()
    {
        return $this->observers;
    }
    
    /**
     * @return CurrentGameParticipant[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    
    /**
     * @return double
     */
    public function getGameLength()
    {
        return $this->gameLength;
    }
    
    /**
     * @return double
     */
    public function getGameQueueConfigId()
    {
        return $this->gameQueueConfigId;
    }
    
    /**
     * @param double $gameId
     *
     * @return $this
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    
        return $this;
    }
    
    /**
     * @param double $gameStartTime
     *
     * @return $this
     */
    public function setGameStartTime($gameStartTime)
    {
        $this->gameStartTime = $gameStartTime;
    
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
     * @param Enum\GameMode::CLASSIC|Enum\GameMode::ODIN|Enum\GameMode::ARAM|Enum\GameMode::TUTORIAL|Enum\GameMode::ONEFORALL|Enum\GameMode::ASCENSION|Enum\GameMode::FIRSTBLOOD|Enum\GameMode::KINGPORO|Enum\GameMode::SIEGE|Enum\GameMode::ASSASSINATE|Enum\GameMode::ARSR|Enum\GameMode::DARKSTAR $gameMode
     *
     * @return $this
     */
    public function setGameMode($gameMode)
    {
        $this->gameMode = $gameMode;
    
        return $this;
    }
    
    /**
     * @param double $mapId
     *
     * @return $this
     */
    public function setMapId($mapId)
    {
        $this->mapId = $mapId;
    
        return $this;
    }
    
    /**
     * @param Enum\GameType::CUSTOM_GAME|Enum\GameType::TUTORIAL_GAME|Enum\GameType::MATCHED_GAME $gameType
     *
     * @return $this
     */
    public function setGameType($gameType)
    {
        $this->gameType = $gameType;
    
        return $this;
    }
    
    /**
     * @param BannedChampion[] $bannedChampions
     *
     * @return $this
     */
    public function setBannedChampions($bannedChampions)
    {
        $this->bannedChampions = $bannedChampions;
    
        return $this;
    }
    
    /**
     * @param Observer $observers
     *
     * @return $this
     */
    public function setObservers($observers)
    {
        $this->observers = $observers;
    
        return $this;
    }
    
    /**
     * @param CurrentGameParticipant[] $participants
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    
        return $this;
    }
    
    /**
     * @param double $gameLength
     *
     * @return $this
     */
    public function setGameLength($gameLength)
    {
        $this->gameLength = $gameLength;
    
        return $this;
    }
    
    /**
     * @param double $gameQueueConfigId
     *
     * @return $this
     */
    public function setGameQueueConfigId($gameQueueConfigId)
    {
        $this->gameQueueConfigId = $gameQueueConfigId;
    
        return $this;
    }
    
}
