<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains rune page information.
 *
 * @category Runes
 */
class RunePageDto extends BaseDto {
    /** @var bool */
    protected $current;
    
    /** @var RuneSlotDto[] */
    protected $slots;
    
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
     * @return RuneSlotDto[]
     */
    public function getSlots()
    {
        return $this->slots;
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
     * @param RuneSlotDto[] $slots
     *
     * @return $this
     */
    public function setSlots($slots)
    {
        foreach ($slots as $key => $dtoData) {
            $this->slots[$key] = new RuneSlotDto($dtoData);
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
