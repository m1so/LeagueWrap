<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains language strings data.
 *
 * @category LolStaticData
 */
class LanguageStringsDto extends BaseDto {
    /** @var string[] Map[string, string] */
    protected $data;
    
    /** @var string */
    protected $version;
    
    /** @var string */
    protected $type;
    
    /**
     * @return string[]
     */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param string[] $data Map[string, string]
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }
    
    /**
     * @param string $version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }
    
    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }
    
}
