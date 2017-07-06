<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains spell vars data.
 *
 * @category LolStaticData
 */
class SpellVarsDto extends BaseDto {
    /** @var string */
    protected $ranksWith;
    
    /** @var string */
    protected $dyn;
    
    /** @var string */
    protected $link;
    
    /** @var double[] */
    protected $coeff;
    
    /** @var string */
    protected $key;
    
    /**
     * @return string
     */
    public function getRanksWith()
    {
        return $this->ranksWith;
    }
    
    /**
     * @return string
     */
    public function getDyn()
    {
        return $this->dyn;
    }
    
    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
    
    /**
     * @return double[]
     */
    public function getCoeff()
    {
        return $this->coeff;
    }
    
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * @param string $ranksWith
     *
     * @return $this
     */
    public function setRanksWith($ranksWith)
    {
        $this->ranksWith = $ranksWith;
    
        return $this;
    }
    
    /**
     * @param string $dyn
     *
     * @return $this
     */
    public function setDyn($dyn)
    {
        $this->dyn = $dyn;
    
        return $this;
    }
    
    /**
     * @param string $link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }
    
    /**
     * @param double[] $coeff
     *
     * @return $this
     */
    public function setCoeff($coeff)
    {
        $this->coeff = $coeff;
    
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
