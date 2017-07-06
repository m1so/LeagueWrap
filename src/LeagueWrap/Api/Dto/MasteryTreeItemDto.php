<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains mastery tree item data.
 *
 * @category LolStaticData
 */
class MasteryTreeItemDto extends BaseDto {
    /** @var int */
    protected $masteryId;
    
    /** @var string */
    protected $prereq;
    
    /**
     * @return int
     */
    public function getMasteryId()
    {
        return $this->masteryId;
    }
    
    /**
     * @return string
     */
    public function getPrereq()
    {
        return $this->prereq;
    }
    
    /**
     * @param int $masteryId
     *
     * @return $this
     */
    public function setMasteryId($masteryId)
    {
        $this->masteryId = $masteryId;
    
        return $this;
    }
    
    /**
     * @param string $prereq
     *
     * @return $this
     */
    public function setPrereq($prereq)
    {
        $this->prereq = $prereq;
    
        return $this;
    }
    
}
