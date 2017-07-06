<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains profile icon details data.
 *
 * @category LolStaticData
 */
class ProfileIconDetailsDto extends BaseDto {
    /** @var ImageDto */
    protected $image;
    
    /** @var double */
    protected $id;
    
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
    public function getId()
    {
        return $this->id;
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
     * @param double $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
}
