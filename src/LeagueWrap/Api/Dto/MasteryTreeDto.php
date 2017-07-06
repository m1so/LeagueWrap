<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains mastery tree data.
 *
 * @category LolStaticData
 */
class MasteryTreeDto extends BaseDto {
    /** @var MasteryTreeDto[] */
    protected $Resolve;
    
    /** @var MasteryTreeDto[] */
    protected $Ferocity;
    
    /** @var MasteryTreeDto[] */
    protected $Cunning;
    
    /**
     * @return MasteryTreeDto[]
     */
    public function getResolve()
    {
        return $this->Resolve;
    }
    
    /**
     * @return MasteryTreeDto[]
     */
    public function getFerocity()
    {
        return $this->Ferocity;
    }
    
    /**
     * @return MasteryTreeDto[]
     */
    public function getCunning()
    {
        return $this->Cunning;
    }
    
    /**
     * @param MasteryTreeDto[] $Resolve
     *
     * @return $this
     */
    public function setResolve($Resolve)
    {
        foreach ($Resolve as $key => $dtoData) {
            $this->Resolve[$key] = new MasteryTreeDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param MasteryTreeDto[] $Ferocity
     *
     * @return $this
     */
    public function setFerocity($Ferocity)
    {
        foreach ($Ferocity as $key => $dtoData) {
            $this->Ferocity[$key] = new MasteryTreeDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param MasteryTreeDto[] $Cunning
     *
     * @return $this
     */
    public function setCunning($Cunning)
    {
        foreach ($Cunning as $key => $dtoData) {
            $this->Cunning[$key] = new MasteryTreeDto($dtoData);
        }
    
        return $this;
    }
    
}
