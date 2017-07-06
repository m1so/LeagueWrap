<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains rune pages information.
 *
 * @category Runes
 */
class RunePagesDto extends BaseDto {
    /** @var RunePageDto[] */
    protected $pages;
    
    /** @var double */
    protected $summonerId;
    
    /**
     * @return RunePageDto[]
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
     * @param RunePageDto[] $pages
     *
     * @return $this
     */
    public function setPages($pages)
    {
        foreach ($pages as $key => $dtoData) {
            $this->pages[$key] = new RunePageDto($dtoData);
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
