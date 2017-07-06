<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchFrameDto extends BaseDto {
    /** @var double */
    protected $timestamp;
    
    /** @var ParticipantFrame[] Map[int, ParticipantFrame] */
    protected $participantFrames;
    
    /** @var MatchEventDto[] */
    protected $events;
    
    /**
     * @return double
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     * @return ParticipantFrame[]
     */
    public function getParticipantFrames()
    {
        return $this->participantFrames;
    }
    
    /**
     * @return MatchEventDto[]
     */
    public function getEvents()
    {
        return $this->events;
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
     * @param ParticipantFrame[] $participantFrames Map[int, ParticipantFrame]
     *
     * @return $this
     */
    public function setParticipantFrames($participantFrames)
    {
        $this->participantFrames = $participantFrames;
    
        return $this;
    }
    
    /**
     * @param MatchEventDto[] $events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        foreach ($events as $key => $dtoData) {
            $this->events[$key] = new MatchEventDto($dtoData);
        }
    
        return $this;
    }
    
}
