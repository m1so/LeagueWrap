<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion list data.
 *
 * @category LolStaticData
 */
class ChampionListDto extends BaseDto {
    /** @var string[] Map[string, string] */
    protected $keys;
    
    /** @var ChampionDto[] Map[string, ChampionDto] */
    protected $data;
    
    /** @var string */
    protected $version;
    
    /** @var string */
    protected $type;
    
    /** @var string */
    protected $format;
    
    /**
     * @return string[]
     */
    public function getKeys()
    {
        return $this->keys;
    }
    
    /**
     * @return ChampionDto[]
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
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
    
    /**
     * @param string[] $keys Map[string, string]
     *
     * @return $this
     */
    public function setKeys($keys)
    {
        $this->keys = $keys;
    
        return $this;
    }
    
    /**
     * @param ChampionDto[] $data Map[string, ChampionDto]
     *
     * @return $this
     */
    public function setData($data)
    {
        foreach ($data as $key => $dtoData) {
            $this->data[$key] = new ChampionDto($dtoData);
        }
    
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
    
    /**
     * @param string $format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->format = $format;
    
        return $this;
    }
    
}
