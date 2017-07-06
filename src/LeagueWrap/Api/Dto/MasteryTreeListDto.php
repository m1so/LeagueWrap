<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains mastery tree list data.
 *
 * @category LolStaticData
 */
class MasteryTreeListDto extends BaseDto {
    /** @var MasteryTreeItemDto[] */
    protected $masteryTreeItems;
    
    /**
     * @return MasteryTreeItemDto[]
     */
    public function getMasteryTreeItems()
    {
        return $this->masteryTreeItems;
    }
    
    /**
     * @param MasteryTreeItemDto[] $masteryTreeItems
     *
     * @return $this
     */
    public function setMasteryTreeItems($masteryTreeItems)
    {
        foreach ($masteryTreeItems as $key => $dtoData) {
            $this->masteryTreeItems[$key] = new MasteryTreeItemDto($dtoData);
        }
    
        return $this;
    }
    
}
