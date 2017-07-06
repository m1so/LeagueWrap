<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion recommended data.
 *
 * @category LolStaticData
 */
class RecommendedDto extends BaseDto {
    /** @var string */
    protected $map;
    
    /** @var BlockDto[] */
    protected $blocks;
    
    /** @var string */
    protected $champion;
    
    /** @var string */
    protected $title;
    
    /** @var bool */
    protected $priority;
    
    /** @var string */
    protected $mode;
    
    /** @var string */
    protected $type;
    
    /**
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }
    
    /**
     * @return BlockDto[]
     */
    public function getBlocks()
    {
        return $this->blocks;
    }
    
    /**
     * @return string
     */
    public function getChampion()
    {
        return $this->champion;
    }
    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @return bool
     */
    public function isPriority()
    {
        return $this->priority;
    }
    
    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param string $map
     *
     * @return $this
     */
    public function setMap($map)
    {
        $this->map = $map;
    
        return $this;
    }
    
    /**
     * @param BlockDto[] $blocks
     *
     * @return $this
     */
    public function setBlocks($blocks)
    {
        foreach ($blocks as $key => $dtoData) {
            $this->blocks[$key] = new BlockDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param string $champion
     *
     * @return $this
     */
    public function setChampion($champion)
    {
        $this->champion = $champion;
    
        return $this;
    }
    
    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }
    
    /**
     * @param bool $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }
    
    /**
     * @param string $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    
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
    
}
