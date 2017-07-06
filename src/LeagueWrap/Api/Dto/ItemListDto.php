<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains item list data.
 *
 * @category LolStaticData
 */
class ItemListDto extends BaseDto {
    /** @var ItemDto[] Map[string, ItemDto] */
    protected $data;
    
    /** @var string */
    protected $version;
    
    /** @var ItemTreeDto[] */
    protected $tree;
    
    /** @var GroupDto[] */
    protected $groups;
    
    /** @var string */
    protected $type;
    
    /**
     * @return ItemDto[]
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
     * @return ItemTreeDto[]
     */
    public function getTree()
    {
        return $this->tree;
    }
    
    /**
     * @return GroupDto[]
     */
    public function getGroups()
    {
        return $this->groups;
    }
    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * @param ItemDto[] $data Map[string, ItemDto]
     *
     * @return $this
     */
    public function setData($data)
    {
        foreach ($data as $key => $dtoData) {
            $this->data[$key] = new ItemDto($dtoData);
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
     * @param ItemTreeDto[] $tree
     *
     * @return $this
     */
    public function setTree($tree)
    {
        foreach ($tree as $key => $dtoData) {
            $this->tree[$key] = new ItemTreeDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param GroupDto[] $groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        foreach ($groups as $key => $dtoData) {
            $this->groups[$key] = new GroupDto($dtoData);
        }
    
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
