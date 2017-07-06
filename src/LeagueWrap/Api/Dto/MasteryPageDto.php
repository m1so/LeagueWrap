<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains mastery page information.
 *
 * @category Masteries
 */
class MasteryPageDto extends BaseDto {
    /** @var bool */
    protected $current;
    
    /** @var MasteryDto[] */
    protected $masteries;
    
    /** @var string */
    protected $name;
    
    /** @var double */
    protected $id;
    
    /**
     * @return bool
     */
    public function isCurrent()
    {
        return $this->current;
    }
    
    /**
     * @return MasteryDto[]
     */
    public function getMasteries()
    {
        return $this->masteries;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return double
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param bool $current
     *
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    
        return $this;
    }
    
    /**
     * @param MasteryDto[] $masteries
     *
     * @return $this
     */
    public function setMasteries($masteries)
    {
        foreach ($masteries as $key => $dtoData) {
            $this->masteries[$key] = new MasteryDto($dtoData);
        }
    
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
     * @param double $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
}
