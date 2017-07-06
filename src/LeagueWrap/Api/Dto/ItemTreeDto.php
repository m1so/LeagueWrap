<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains item tree data.
 *
 * @category LolStaticData
 */
class ItemTreeDto extends BaseDto {
    /** @var string */
    protected $header;
    
    /** @var string[] */
    protected $tags;
    
    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }
    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    /**
     * @param string $header
     *
     * @return $this
     */
    public function setHeader($header)
    {
        $this->header = $header;
    
        return $this;
    }
    
    /**
     * @param string[] $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }
    
}
