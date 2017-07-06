<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchDto extends BaseDto {
    /** @var int */
    protected $seasonId;
    
    /** @var int */
    protected $queueId;
    
    /** @var double */
    protected $gameId;
    
    /** @var ParticipantIdentityDto[] */
    protected $participantIdentities;
    
    /** @var string */
    protected $gameVersion;
    
    /** @var string */
    protected $platformId;
    
    /** @var Enum\GameMode::CLASSIC|Enum\GameMode::ODIN|Enum\GameMode::ARAM|Enum\GameMode::TUTORIAL|Enum\GameMode::ONEFORALL|Enum\GameMode::ASCENSION|Enum\GameMode::FIRSTBLOOD|Enum\GameMode::KINGPORO|Enum\GameMode::SIEGE|Enum\GameMode::ASSASSINATE|Enum\GameMode::ARSR|Enum\GameMode::DARKSTAR */
    protected $gameMode;
    
    /** @var int */
    protected $mapId;
    
    /** @var Enum\GameType::CUSTOM_GAME|Enum\GameType::TUTORIAL_GAME|Enum\GameType::MATCHED_GAME */
    protected $gameType;
    
    /** @var TeamStatsDto[] */
    protected $teams;
    
    /** @var ParticipantDto[] */
    protected $participants;
    
    /** @var double */
    protected $gameDuration;
    
    /** @var double */
    protected $gameCreation;
    
    /**
     * @return int
     */
    public function getSeasonId()
    {
        return $this->seasonId;
    }
    
    /**
     * @return int
     */
    public function getQueueId()
    {
        return $this->queueId;
    }
    
    /**
     * @return double
     */
    public function getGameId()
    {
        return $this->gameId;
    }
    
    /**
     * @return ParticipantIdentityDto[]
     */
    public function getParticipantIdentities()
    {
        return $this->participantIdentities;
    }
    
    /**
     * @return string
     */
    public function getGameVersion()
    {
        return $this->gameVersion;
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
     * @return int
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
     * @return TeamStatsDto[]
     */
    public function getTeams()
    {
        return $this->teams;
    }
    
    /**
     * @return ParticipantDto[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    
    /**
     * @return double
     */
    public function getGameDuration()
    {
        return $this->gameDuration;
    }
    
    /**
     * @return double
     */
    public function getGameCreation()
    {
        return $this->gameCreation;
    }
    
    /**
     * @param int $seasonId
     *
     * @return $this
     */
    public function setSeasonId($seasonId)
    {
        $this->seasonId = $seasonId;
    
        return $this;
    }
    
    /**
     * @param int $queueId
     *
     * @return $this
     */
    public function setQueueId($queueId)
    {
        $this->queueId = $queueId;
    
        return $this;
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
     * @param ParticipantIdentityDto[] $participantIdentities
     *
     * @return $this
     */
    public function setParticipantIdentities($participantIdentities)
    {
        foreach ($participantIdentities as $key => $dtoData) {
            $this->participantIdentities[$key] = new ParticipantIdentityDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param string $gameVersion
     *
     * @return $this
     */
    public function setGameVersion($gameVersion)
    {
        $this->gameVersion = $gameVersion;
    
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
     * @param int $mapId
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
     * @param TeamStatsDto[] $teams
     *
     * @return $this
     */
    public function setTeams($teams)
    {
        foreach ($teams as $key => $dtoData) {
            $this->teams[$key] = new TeamStatsDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param ParticipantDto[] $participants
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        foreach ($participants as $key => $dtoData) {
            $this->participants[$key] = new ParticipantDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param double $gameDuration
     *
     * @return $this
     */
    public function setGameDuration($gameDuration)
    {
        $this->gameDuration = $gameDuration;
    
        return $this;
    }
    
    /**
     * @param double $gameCreation
     *
     * @return $this
     */
    public function setGameCreation($gameCreation)
    {
        $this->gameCreation = $gameCreation;
    
        return $this;
    }
    
}
