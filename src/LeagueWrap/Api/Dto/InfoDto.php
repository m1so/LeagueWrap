<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion information.
 *
 * @category LolStaticData
 */
class InfoDto extends BaseDto {
    /** @var int */
    protected $difficulty;
    
    /** @var int */
    protected $attack;
    
    /** @var int */
    protected $defense;
    
    /** @var int */
    protected $magic;
    
    /**
     * @return int
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }
    
    /**
     * @return int
     */
    public function getAttack()
    {
        return $this->attack;
    }
    
    /**
     * @return int
     */
    public function getDefense()
    {
        return $this->defense;
    }
    
    /**
     * @return int
     */
    public function getMagic()
    {
        return $this->magic;
    }
    
    /**
     * @param int $difficulty
     *
     * @return $this
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    
        return $this;
    }
    
    /**
     * @param int $attack
     *
     * @return $this
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
    
        return $this;
    }
    
    /**
     * @param int $defense
     *
     * @return $this
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    
        return $this;
    }
    
    /**
     * @param int $magic
     *
     * @return $this
     */
    public function setMagic($magic)
    {
        $this->magic = $magic;
    
        return $this;
    }
    
}
