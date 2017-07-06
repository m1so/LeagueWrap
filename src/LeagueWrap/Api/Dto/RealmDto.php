<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains realm data.
 *
 * @category LolStaticData
 */
class RealmDto extends BaseDto {
    /** @var string */
    protected $lg;
    
    /** @var string */
    protected $dd;
    
    /** @var string */
    protected $l;
    
    /** @var string[] Map[string, string] */
    protected $n;
    
    /** @var int */
    protected $profileiconmax;
    
    /** @var string */
    protected $store;
    
    /** @var string */
    protected $v;
    
    /** @var string */
    protected $cdn;
    
    /** @var string */
    protected $css;
    
    /**
     * @return string
     */
    public function getLg()
    {
        return $this->lg;
    }
    
    /**
     * @return string
     */
    public function getDd()
    {
        return $this->dd;
    }
    
    /**
     * @return string
     */
    public function getL()
    {
        return $this->l;
    }
    
    /**
     * @return string[]
     */
    public function getN()
    {
        return $this->n;
    }
    
    /**
     * @return int
     */
    public function getProfileiconmax()
    {
        return $this->profileiconmax;
    }
    
    /**
     * @return string
     */
    public function getStore()
    {
        return $this->store;
    }
    
    /**
     * @return string
     */
    public function getV()
    {
        return $this->v;
    }
    
    /**
     * @return string
     */
    public function getCdn()
    {
        return $this->cdn;
    }
    
    /**
     * @return string
     */
    public function getCss()
    {
        return $this->css;
    }
    
    /**
     * @param string $lg
     *
     * @return $this
     */
    public function setLg($lg)
    {
        $this->lg = $lg;
    
        return $this;
    }
    
    /**
     * @param string $dd
     *
     * @return $this
     */
    public function setDd($dd)
    {
        $this->dd = $dd;
    
        return $this;
    }
    
    /**
     * @param string $l
     *
     * @return $this
     */
    public function setL($l)
    {
        $this->l = $l;
    
        return $this;
    }
    
    /**
     * @param string[] $n Map[string, string]
     *
     * @return $this
     */
    public function setN($n)
    {
        $this->n = $n;
    
        return $this;
    }
    
    /**
     * @param int $profileiconmax
     *
     * @return $this
     */
    public function setProfileiconmax($profileiconmax)
    {
        $this->profileiconmax = $profileiconmax;
    
        return $this;
    }
    
    /**
     * @param string $store
     *
     * @return $this
     */
    public function setStore($store)
    {
        $this->store = $store;
    
        return $this;
    }
    
    /**
     * @param string $v
     *
     * @return $this
     */
    public function setV($v)
    {
        $this->v = $v;
    
        return $this;
    }
    
    /**
     * @param string $cdn
     *
     * @return $this
     */
    public function setCdn($cdn)
    {
        $this->cdn = $cdn;
    
        return $this;
    }
    
    /**
     * @param string $css
     *
     * @return $this
     */
    public function setCss($css)
    {
        $this->css = $css;
    
        return $this;
    }
    
}
