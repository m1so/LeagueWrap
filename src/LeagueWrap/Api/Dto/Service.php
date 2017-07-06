<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category LolStatus
 */
class Service extends BaseDto {
    /** @var string */
    protected $status;
    
    /** @var Incident[] */
    protected $incidents;
    
    /** @var string */
    protected $name;
    
    /** @var string */
    protected $slug;
    
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * @return Incident[]
     */
    public function getIncidents()
    {
        return $this->incidents;
    }
    
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
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }
    
    /**
     * @param Incident[] $incidents
     *
     * @return $this
     */
    public function setIncidents($incidents)
    {
        $this->incidents = $incidents;
    
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
     * @param string $slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }
    
}
