<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchEventDto extends BaseDto {
    /** @var string */
    protected $eventType;
    
    /** @var string */
    protected $towerType;
    
    /** @var int */
    protected $teamId;
    
    /** @var string */
    protected $ascendedType;
    
    /** @var int */
    protected $killerId;
    
    /** @var string */
    protected $levelUpType;
    
    /** @var string */
    protected $pointCaptured;
    
    /** @var int[] */
    protected $assistingParticipantIds;
    
    /** @var string */
    protected $wardType;
    
    /** @var string */
    protected $monsterType;
    
    /** @var Type */
    protected $type;
    
    /** @var int */
    protected $skillSlot;
    
    /** @var int */
    protected $victimId;
    
    /** @var double */
    protected $timestamp;
    
    /** @var int */
    protected $afterId;
    
    /** @var string */
    protected $monsterSubType;
    
    /** @var string */
    protected $laneType;
    
    /** @var int */
    protected $itemId;
    
    /** @var int */
    protected $participantId;
    
    /** @var string */
    protected $buildingType;
    
    /** @var int */
    protected $creatorId;
    
    /** @var MatchPositionDto */
    protected $position;
    
    /** @var int */
    protected $beforeId;
    
    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }
    
    /**
     * @return string
     */
    public function getTowerType()
    {
        return $this->towerType;
    }
    
    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
    
    /**
     * @return string
     */
    public function getAscendedType()
    {
        return $this->ascendedType;
    }
    
    /**
     * @return int
     */
    public function getKillerId()
    {
        return $this->killerId;
    }
    
    /**
     * @return string
     */
    public function getLevelUpType()
    {
        return $this->levelUpType;
    }
    
    /**
     * @return string
     */
    public function getPointCaptured()
    {
        return $this->pointCaptured;
    }
    
    /**
     * @return int[]
     */
    public function getAssistingParticipantIds()
    {
        return $this->assistingParticipantIds;
    }
    
    /**
     * @return string
     */
    public function getWardType()
    {
        return $this->wardType;
    }
    
    /**
     * @return string
     */
    public function getMonsterType()
    {
        return $this->monsterType;
    }
    
    /**
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @return int
     */
    public function getSkillSlot()
    {
        return $this->skillSlot;
    }
    
    /**
     * @return int
     */
    public function getVictimId()
    {
        return $this->victimId;
    }
    
    /**
     * @return double
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     * @return int
     */
    public function getAfterId()
    {
        return $this->afterId;
    }
    
    /**
     * @return string
     */
    public function getMonsterSubType()
    {
        return $this->monsterSubType;
    }
    
    /**
     * @return string
     */
    public function getLaneType()
    {
        return $this->laneType;
    }
    
    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    
    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
    
    /**
     * @return string
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }
    
    /**
     * @return int
     */
    public function getCreatorId()
    {
        return $this->creatorId;
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
    public function getBeforeId()
    {
        return $this->beforeId;
    }
    
    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    
        return $this;
    }
    
    /**
     * @param string $towerType
     *
     * @return $this
     */
    public function setTowerType($towerType)
    {
        $this->towerType = $towerType;
    
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
     * @param string $ascendedType
     *
     * @return $this
     */
    public function setAscendedType($ascendedType)
    {
        $this->ascendedType = $ascendedType;
    
        return $this;
    }
    
    /**
     * @param int $killerId
     *
     * @return $this
     */
    public function setKillerId($killerId)
    {
        $this->killerId = $killerId;
    
        return $this;
    }
    
    /**
     * @param string $levelUpType
     *
     * @return $this
     */
    public function setLevelUpType($levelUpType)
    {
        $this->levelUpType = $levelUpType;
    
        return $this;
    }
    
    /**
     * @param string $pointCaptured
     *
     * @return $this
     */
    public function setPointCaptured($pointCaptured)
    {
        $this->pointCaptured = $pointCaptured;
    
        return $this;
    }
    
    /**
     * @param int[] $assistingParticipantIds
     *
     * @return $this
     */
    public function setAssistingParticipantIds($assistingParticipantIds)
    {
        $this->assistingParticipantIds = $assistingParticipantIds;
    
        return $this;
    }
    
    /**
     * @param string $wardType
     *
     * @return $this
     */
    public function setWardType($wardType)
    {
        $this->wardType = $wardType;
    
        return $this;
    }
    
    /**
     * @param string $monsterType
     *
     * @return $this
     */
    public function setMonsterType($monsterType)
    {
        $this->monsterType = $monsterType;
    
        return $this;
    }
    
    /**
     * @param Type $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }
    
    /**
     * @param int $skillSlot
     *
     * @return $this
     */
    public function setSkillSlot($skillSlot)
    {
        $this->skillSlot = $skillSlot;
    
        return $this;
    }
    
    /**
     * @param int $victimId
     *
     * @return $this
     */
    public function setVictimId($victimId)
    {
        $this->victimId = $victimId;
    
        return $this;
    }
    
    /**
     * @param double $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }
    
    /**
     * @param int $afterId
     *
     * @return $this
     */
    public function setAfterId($afterId)
    {
        $this->afterId = $afterId;
    
        return $this;
    }
    
    /**
     * @param string $monsterSubType
     *
     * @return $this
     */
    public function setMonsterSubType($monsterSubType)
    {
        $this->monsterSubType = $monsterSubType;
    
        return $this;
    }
    
    /**
     * @param string $laneType
     *
     * @return $this
     */
    public function setLaneType($laneType)
    {
        $this->laneType = $laneType;
    
        return $this;
    }
    
    /**
     * @param int $itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    
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
     * @param string $buildingType
     *
     * @return $this
     */
    public function setBuildingType($buildingType)
    {
        $this->buildingType = $buildingType;
    
        return $this;
    }
    
    /**
     * @param int $creatorId
     *
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
    
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
     * @param int $beforeId
     *
     * @return $this
     */
    public function setBeforeId($beforeId)
    {
        $this->beforeId = $beforeId;
    
        return $this;
    }
    
}
