<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains map details data.
 *
 * @category LolStaticData
 */
class MapDetailsDto extends BaseDto {
    /** @var string */
    protected $mapName;
    
    /** @var ImageDto */
    protected $image;
    
    /** @var double */
    protected $mapId;
    
    /** @var double[] */
    protected $unpurchasableItemList;
    
    /**
     * @return string
     */
    public function getMapName()
    {
        return $this->mapName;
    }
    
    /**
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @return double
     */
    public function getMapId()
    {
        return $this->mapId;
    }
    
    /**
     * @return double[]
     */
    public function getUnpurchasableItemList()
    {
        return $this->unpurchasableItemList;
    }
    
    /**
     * @param string $mapName
     *
     * @return $this
     */
    public function setMapName($mapName)
    {
        $this->mapName = $mapName;
    
        return $this;
    }
    
    /**
     * @param ImageDto $image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = new ImageDto($image);
    
        return $this;
    }
    
    /**
     * @param double $mapId
     *
     * @return $this
     */
    public function setMapId($mapId)
    {
        $this->mapId = $mapId;
    
        return $this;
    }
    
    /**
     * @param double[] $unpurchasableItemList
     *
     * @return $this
     */
    public function setUnpurchasableItemList($unpurchasableItemList)
    {
        $this->unpurchasableItemList = $unpurchasableItemList;
    
        return $this;
    }
    
}
