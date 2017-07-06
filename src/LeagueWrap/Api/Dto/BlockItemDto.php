<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion recommended block item data.
 *
 * @category LolStaticData
 */
class BlockItemDto extends BaseDto {
    /** @var int */
    protected $count;
    
    /** @var int */
    protected $id;
    
    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
    
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
    
}
