<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains profile icon data.
 *
 * @category LolStaticData
 */
class ProfileIconDataDto extends BaseDto {
    /** @var ProfileIconDetailsDto[] Map[string, ProfileIconDetailsDto] */
    protected $data;
    
    /** @var string */
    protected $version;
    
    /** @var string */
    protected $type;
    
    /**
     * @return ProfileIconDetailsDto[]
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
     * @param ProfileIconDetailsDto[] $data Map[string, ProfileIconDetailsDto]
     *
     * @return $this
     */
    public function setData($data)
    {
        foreach ($data as $key => $dtoData) {
            $this->data[$key] = new ProfileIconDetailsDto($dtoData);
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
