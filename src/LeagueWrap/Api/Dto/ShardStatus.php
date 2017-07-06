<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category LolStatus
 */
class ShardStatus extends BaseDto {
    /** @var string */
    protected $name;
    
    /** @var string */
    protected $region_tag;
    
    /** @var string */
    protected $hostname;
    
    /** @var Service[] */
    protected $services;
    
    /** @var string */
    protected $slug;
    
    /** @var string[] */
    protected $locales;
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return string
     */
    public function getRegion_tag()
    {
        return $this->region_tag;
    }
    
    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    
    /**
     * @return Service[]
     */
    public function getServices()
    {
        return $this->services;
    }
    
    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * @return string[]
     */
    public function getLocales()
    {
        return $this->locales;
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
     * @param string $region_tag
     *
     * @return $this
     */
    public function setRegion_tag($region_tag)
    {
        $this->region_tag = $region_tag;
    
        return $this;
    }
    
    /**
     * @param string $hostname
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    
        return $this;
    }
    
    /**
     * @param Service[] $services
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->services = $services;
    
        return $this;
    }
    
    /**
     * @param string $slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }
    
    /**
     * @param string[] $locales
     *
     * @return $this
     */
    public function setLocales($locales)
    {
        $this->locales = $locales;
    
        return $this;
    }
    
}
