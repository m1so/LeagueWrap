<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion passive data.
 *
 * @category LolStaticData
 */
class PassiveDto extends BaseDto {
    /** @var ImageDto */
    protected $image;
    
    /** @var string */
    protected $sanitizedDescription;
    
    /** @var string */
    protected $name;
    
    /** @var string */
    protected $description;
    
    /**
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->sanitizedDescription;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
     * @param string $sanitizedDescription
     *
     * @return $this
     */
    public function setSanitizedDescription($sanitizedDescription)
    {
        $this->sanitizedDescription = $sanitizedDescription;
    
        return $this;
    }
    
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }
    
}
