<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion skin data.
 *
 * @category LolStaticData
 */
class SkinDto extends BaseDto {
    /** @var int */
    protected $num;
    
    /** @var string */
    protected $name;
    
    /** @var int */
    protected $id;
    
    /**
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $num
     *
     * @return $this
     */
    public function setNum($num)
    {
        $this->num = $num;
    
        return $this;
    }
    
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
    
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
