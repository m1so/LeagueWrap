<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion level tip data.
 *
 * @category LolStaticData
 */
class LevelTipDto extends BaseDto {
    /** @var string[] */
    protected $effect;
    
    /** @var string[] */
    protected $label;
    
    /**
     * @return string[]
     */
    public function getEffect()
    {
        return $this->effect;
    }
    
    /**
     * @return string[]
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    /**
     * @param string[] $effect
     *
     * @return $this
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;
    
        return $this;
    }
    
    /**
     * @param string[] $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }
    
}
