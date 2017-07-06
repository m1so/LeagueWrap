<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains rune slot information.
 *
 * @category Runes
 */
class RuneSlotDto extends BaseDto {
    /** @var int */
    protected $runeSlotId;
    
    /** @var int */
    protected $runeId;
    
    /**
     * @return int
     */
    public function getRuneSlotId()
    {
        return $this->runeSlotId;
    }
    
    /**
     * @return int
     */
    public function getRuneId()
    {
        return $this->runeId;
    }
    
    /**
     * @param int $runeSlotId
     *
     * @return $this
     */
    public function setRuneSlotId($runeSlotId)
    {
        $this->runeSlotId = $runeSlotId;
    
        return $this;
    }
    
    /**
     * @param int $runeId
     *
     * @return $this
     */
    public function setRuneId($runeId)
    {
        $this->runeId = $runeId;
    
        return $this;
    }
    
}
