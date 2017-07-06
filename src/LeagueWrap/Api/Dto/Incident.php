<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category LolStatus
 */
class Incident extends BaseDto {
    /** @var bool */
    protected $active;
    
    /** @var string */
    protected $created_at;
    
    /** @var double */
    protected $id;
    
    /** @var Message[] */
    protected $updates;
    
    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }
    
    /**
     * @return string
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }
    
    /**
     * @return double
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return Message[]
     */
    public function getUpdates()
    {
        return $this->updates;
    }
    
    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }
    
    /**
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    
        return $this;
    }
    
    /**
     * @param double $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
    /**
     * @param Message[] $updates
     *
     * @return $this
     */
    public function setUpdates($updates)
    {
        $this->updates = $updates;
    
        return $this;
    }
    
}
