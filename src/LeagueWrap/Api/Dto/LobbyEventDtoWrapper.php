<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Tournament
 */
class LobbyEventDtoWrapper extends BaseDto {
    /** @var LobbyEventDto[] */
    protected $eventList;
    
    /**
     * @return LobbyEventDto[]
     */
    public function getEventList()
    {
        return $this->eventList;
    }
    
    /**
     * @param LobbyEventDto[] $eventList
     *
     * @return $this
     */
    public function setEventList($eventList)
    {
        foreach ($eventList as $key => $dtoData) {
            $this->eventList[$key] = new LobbyEventDto($dtoData);
        }
    
        return $this;
    }
    
}
