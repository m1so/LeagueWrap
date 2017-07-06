<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class ParticipantIdentityDto extends BaseDto {
    /** @var PlayerDto */
    protected $player;
    
    /** @var int */
    protected $participantId;
    
    /**
     * @return PlayerDto
     */
    public function getPlayer()
    {
        return $this->player;
    }
    
    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
    
    /**
     * @param PlayerDto $player
     *
     * @return $this
     */
    public function setPlayer($player)
    {
        $this->player = new PlayerDto($player);
    
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
    
}
