<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains item gold data.
 *
 * @category LolStaticData
 */
class GoldDto extends BaseDto {
    /** @var int */
    protected $sell;
    
    /** @var int */
    protected $total;
    
    /** @var int */
    protected $base;
    
    /** @var bool */
    protected $purchasable;
    
    /**
     * @return int
     */
    public function getSell()
    {
        return $this->sell;
    }
    
    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
    
    /**
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }
    
    /**
     * @return bool
     */
    public function isPurchasable()
    {
        return $this->purchasable;
    }
    
    /**
     * @param int $sell
     *
     * @return $this
     */
    public function setSell($sell)
    {
        $this->sell = $sell;
    
        return $this;
    }
    
    /**
     * @param int $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }
    
    /**
     * @param int $base
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->base = $base;
    
        return $this;
    }
    
    /**
     * @param bool $purchasable
     *
     * @return $this
     */
    public function setPurchasable($purchasable)
    {
        $this->purchasable = $purchasable;
    
        return $this;
    }
    
}
