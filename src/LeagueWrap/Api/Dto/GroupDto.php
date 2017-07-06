<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains item group data.
 *
 * @category LolStaticData
 */
class GroupDto extends BaseDto {
    /** @var string */
    protected $MaxGroupOwnable;
    
    /** @var string */
    protected $key;
    
    /**
     * @return string
     */
    public function getMaxGroupOwnable()
    {
        return $this->MaxGroupOwnable;
    }
    
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * @param string $MaxGroupOwnable
     *
     * @return $this
     */
    public function setMaxGroupOwnable($MaxGroupOwnable)
    {
        $this->MaxGroupOwnable = $MaxGroupOwnable;
    
        return $this;
    }
    
    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
    
        return $this;
    }
    
}
