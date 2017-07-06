<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains mastery list data.
 *
 * @category LolStaticData
 */
class MasteryListDto extends BaseDto {
    /** @var MasteryDto[] Map[string, MasteryDto] */
    protected $data;
    
    /** @var string */
    protected $version;
    
    /** @var MasteryTreeDto */
    protected $tree;
    
    /** @var string */
    protected $type;
    
    /**
     * @return MasteryDto[]
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
     * @return MasteryTreeDto
     */
    public function getTree()
    {
        return $this->tree;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param MasteryDto[] $data Map[string, MasteryDto]
     *
     * @return $this
     */
    public function setData($data)
    {
        foreach ($data as $key => $dtoData) {
            $this->data[$key] = new MasteryDto($dtoData);
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
     * @param MasteryTreeDto $tree
     *
     * @return $this
     */
    public function setTree($tree)
    {
        $this->tree = new MasteryTreeDto($tree);
    
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
