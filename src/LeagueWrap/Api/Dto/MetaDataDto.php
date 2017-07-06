<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains meta data.
 *
 * @category LolStaticData
 */
class MetaDataDto extends BaseDto {
    /** @var string */
    protected $tier;
    
    /** @var string */
    protected $type;
    
    /** @var bool */
    protected $isRune;
    
    /**
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @return bool
     */
    public function isIsRune()
    {
        return $this->isRune;
    }
    
    /**
     * @param string $tier
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    
        return $this;
    }
    
    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }
    
    /**
     * @param bool $isRune
     *
     * @return $this
     */
    public function setIsRune($isRune)
    {
        $this->isRune = $isRune;
    
        return $this;
    }
    
}
