<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains map data.
 *
 * @category LolStaticData
 */
class MapDataDto extends BaseDto {
    /** @var DetailsDto[] Map[string, MapDetailsDto] */
    protected $data;
    
    /** @var string */
    protected $version;
    
    /** @var string */
    protected $type;
    
    /**
     * @return DetailsDto[]
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
     * @param DetailsDto[] $data Map[string, MapDetailsDto]
     *
     * @return $this
     */
    public function setData($data)
    {
        foreach ($data as $key => $dtoData) {
            $this->data[$key] = new DetailsDto($dtoData);
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
    
}
