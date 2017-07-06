<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains masteries information.
 *
 * @category Masteries
 */
class MasteryPagesDto extends BaseDto {
    /** @var MasteryPageDto[] */
    protected $pages;
    
    /** @var double */
    protected $summonerId;
    
    /**
     * @return MasteryPageDto[]
     */
    public function getPages()
    {
        return $this->pages;
    }
    
    /**
     * @return double
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }
    
    /**
     * @param MasteryPageDto[] $pages
     *
     * @return $this
     */
    public function setPages($pages)
    {
        foreach ($pages as $key => $dtoData) {
            $this->pages[$key] = new MasteryPageDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param double $summonerId
     *
     * @return $this
     */
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    
        return $this;
    }
    
}
