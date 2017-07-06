<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains image data.
 *
 * @category LolStaticData
 */
class ImageDto extends BaseDto {
    /** @var string */
    protected $full;
    
    /** @var string */
    protected $group;
    
    /** @var string */
    protected $sprite;
    
    /** @var int */
    protected $h;
    
    /** @var int */
    protected $w;
    
    /** @var int */
    protected $y;
    
    /** @var int */
    protected $x;
    
    /**
     * @return string
     */
    public function getFull()
    {
        return $this->full;
    }
    
    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }
    
    /**
     * @return string
     */
    public function getSprite()
    {
        return $this->sprite;
    }
    
    /**
     * @return int
     */
    public function getH()
    {
        return $this->h;
    }
    
    /**
     * @return int
     */
    public function getW()
    {
        return $this->w;
    }
    
    /**
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }
    
    /**
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }
    
    /**
     * @param string $full
     *
     * @return $this
     */
    public function setFull($full)
    {
        $this->full = $full;
    
        return $this;
    }
    
    /**
     * @param string $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
    
        return $this;
    }
    
    /**
     * @param string $sprite
     *
     * @return $this
     */
    public function setSprite($sprite)
    {
        $this->sprite = $sprite;
    
        return $this;
    }
    
    /**
     * @param int $h
     *
     * @return $this
     */
    public function setH($h)
    {
        $this->h = $h;
    
        return $this;
    }
    
    /**
     * @param int $w
     *
     * @return $this
     */
    public function setW($w)
    {
        $this->w = $w;
    
        return $this;
    }
    
    /**
     * @param int $y
     *
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;
    
        return $this;
    }
    
    /**
     * @param int $x
     *
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;
    
        return $this;
    }
    
}
