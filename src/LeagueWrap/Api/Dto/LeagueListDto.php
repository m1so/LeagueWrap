<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category League
 */
class LeagueListDto extends BaseDto {
    /** @var string */
    protected $tier;
    
    /** @var string */
    protected $queue;
    
    /** @var string */
    protected $name;
    
    /** @var LeagueItemDto[] */
    protected $entries;
    
    /**
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }
    
    /**
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return LeagueItemDto[]
     */
    public function getEntries()
    {
        return $this->entries;
    }
    
    /**
     * @param string $tier
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    
        return $this;
    }
    
    /**
     * @param string $queue
     *
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;
    
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
     * @param LeagueItemDto[] $entries
     *
     * @return $this
     */
    public function setEntries($entries)
    {
        foreach ($entries as $key => $dtoData) {
            $this->entries[$key] = new LeagueItemDto($dtoData);
        }
    
        return $this;
    }
    
}
