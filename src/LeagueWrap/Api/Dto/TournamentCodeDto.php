<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Tournament
 */
class TournamentCodeDto extends BaseDto {
    /** @var string */
    protected $map;
    
    /** @var string */
    protected $code;
    
    /** @var string */
    protected $spectators;
    
    /** @var Region */
    protected $region;
    
    /** @var int */
    protected $providerId;
    
    /** @var int */
    protected $teamSize;
    
    /** @var double[] */
    protected $participants;
    
    /** @var string */
    protected $pickType;
    
    /** @var int */
    protected $tournamentId;
    
    /** @var string */
    protected $lobbyName;
    
    /** @var string */
    protected $password;
    
    /** @var int */
    protected $id;
    
    /** @var string */
    protected $metaData;
    
    /**
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }
    
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * @return string
     */
    public function getSpectators()
    {
        return $this->spectators;
    }
    
    /**
     * @return Region
     */
    public function getRegion()
    {
        return $this->region;
    }
    
    /**
     * @return int
     */
    public function getProviderId()
    {
        return $this->providerId;
    }
    
    /**
     * @return int
     */
    public function getTeamSize()
    {
        return $this->teamSize;
    }
    
    /**
     * @return double[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    
    /**
     * @return string
     */
    public function getPickType()
    {
        return $this->pickType;
    }
    
    /**
     * @return int
     */
    public function getTournamentId()
    {
        return $this->tournamentId;
    }
    
    /**
     * @return string
     */
    public function getLobbyName()
    {
        return $this->lobbyName;
    }
    
    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return string
     */
    public function getMetaData()
    {
        return $this->metaData;
    }
    
    /**
     * @param string $map
     *
     * @return $this
     */
    public function setMap($map)
    {
        $this->map = $map;
    
        return $this;
    }
    
    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }
    
    /**
     * @param string $spectators
     *
     * @return $this
     */
    public function setSpectators($spectators)
    {
        $this->spectators = $spectators;
    
        return $this;
    }
    
    /**
     * @param Region $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
    
        return $this;
    }
    
    /**
     * @param int $providerId
     *
     * @return $this
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
    
        return $this;
    }
    
    /**
     * @param int $teamSize
     *
     * @return $this
     */
    public function setTeamSize($teamSize)
    {
        $this->teamSize = $teamSize;
    
        return $this;
    }
    
    /**
     * @param double[] $participants
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    
        return $this;
    }
    
    /**
     * @param string $pickType
     *
     * @return $this
     */
    public function setPickType($pickType)
    {
        $this->pickType = $pickType;
    
        return $this;
    }
    
    /**
     * @param int $tournamentId
     *
     * @return $this
     */
    public function setTournamentId($tournamentId)
    {
        $this->tournamentId = $tournamentId;
    
        return $this;
    }
    
    /**
     * @param string $lobbyName
     *
     * @return $this
     */
    public function setLobbyName($lobbyName)
    {
        $this->lobbyName = $lobbyName;
    
        return $this;
    }
    
    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }
    
    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
    /**
     * @param string $metaData
     *
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->metaData = $metaData;
    
        return $this;
    }
    
}
