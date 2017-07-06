<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion recommended block data.
 *
 * @category LolStaticData
 */
class BlockDto extends BaseDto {
    /** @var BlockItemDto[] */
    protected $items;
    
    /** @var bool */
    protected $recMath;
    
    /** @var string */
    protected $type;
    
    /**
     * @return BlockItemDto[]
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
     * @return bool
     */
    public function isRecMath()
    {
        return $this->recMath;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param BlockItemDto[] $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        foreach ($items as $key => $dtoData) {
            $this->items[$key] = new BlockItemDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param bool $recMath
     *
     * @return $this
     */
    public function setRecMath($recMath)
    {
        $this->recMath = $recMath;
    
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
