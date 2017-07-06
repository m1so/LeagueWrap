<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion spell data.
 *
 * @category LolStaticData
 */
class ChampionSpellDto extends BaseDto {
    /** @var string */
    protected $cooldownBurn;
    
    /** @var string */
    protected $resource;
    
    /** @var LevelTipDto */
    protected $leveltip;
    
    /** @var SpellVarsDto[] */
    protected $vars;
    
    /** @var string */
    protected $costType;
    
    /** @var ImageDto */
    protected $image;
    
    /** @var string */
    protected $sanitizedDescription;
    
    /** @var string */
    protected $sanitizedTooltip;
    
    /** @var object[] */
    protected $effect;
    
    /** @var string */
    protected $tooltip;
    
    /** @var int */
    protected $maxrank;
    
    /** @var string */
    protected $costBurn;
    
    /** @var string */
    protected $rangeBurn;
    
    /** @var object */
    protected $range;
    
    /** @var double[] */
    protected $cooldown;
    
    /** @var int[] */
    protected $cost;
    
    /** @var string */
    protected $key;
    
    /** @var string */
    protected $description;
    
    /** @var string[] */
    protected $effectBurn;
    
    /** @var ImageDto[] */
    protected $altimages;
    
    /** @var string */
    protected $name;
    
    /**
     * @return string
     */
    public function getCooldownBurn()
    {
        return $this->cooldownBurn;
    }
    
    /**
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }
    
    /**
     * @return LevelTipDto
     */
    public function getLeveltip()
    {
        return $this->leveltip;
    }
    
    /**
     * @return SpellVarsDto[]
     */
    public function getVars()
    {
        return $this->vars;
    }
    
    /**
     * @return string
     */
    public function getCostType()
    {
        return $this->costType;
    }
    
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
    public function getSanitizedTooltip()
    {
        return $this->sanitizedTooltip;
    }
    
    /**
     * @return object[]
     */
    public function getEffect()
    {
        return $this->effect;
    }
    
    /**
     * @return string
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }
    
    /**
     * @return int
     */
    public function getMaxrank()
    {
        return $this->maxrank;
    }
    
    /**
     * @return string
     */
    public function getCostBurn()
    {
        return $this->costBurn;
    }
    
    /**
     * @return string
     */
    public function getRangeBurn()
    {
        return $this->rangeBurn;
    }
    
    /**
     * @return object
     */
    public function getRange()
    {
        return $this->range;
    }
    
    /**
     * @return double[]
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }
    
    /**
     * @return int[]
     */
    public function getCost()
    {
        return $this->cost;
    }
    
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @return string[]
     */
    public function getEffectBurn()
    {
        return $this->effectBurn;
    }
    
    /**
     * @return ImageDto[]
     */
    public function getAltimages()
    {
        return $this->altimages;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string $cooldownBurn
     *
     * @return $this
     */
    public function setCooldownBurn($cooldownBurn)
    {
        $this->cooldownBurn = $cooldownBurn;
    
        return $this;
    }
    
    /**
     * @param string $resource
     *
     * @return $this
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    
        return $this;
    }
    
    /**
     * @param LevelTipDto $leveltip
     *
     * @return $this
     */
    public function setLeveltip($leveltip)
    {
        $this->leveltip = new LevelTipDto($leveltip);
    
        return $this;
    }
    
    /**
     * @param SpellVarsDto[] $vars
     *
     * @return $this
     */
    public function setVars($vars)
    {
        foreach ($vars as $key => $dtoData) {
            $this->vars[$key] = new SpellVarsDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param string $costType
     *
     * @return $this
     */
    public function setCostType($costType)
    {
        $this->costType = $costType;
    
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
     * @param string $sanitizedTooltip
     *
     * @return $this
     */
    public function setSanitizedTooltip($sanitizedTooltip)
    {
        $this->sanitizedTooltip = $sanitizedTooltip;
    
        return $this;
    }
    
    /**
     * @param object[] $effect
     *
     * @return $this
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;
    
        return $this;
    }
    
    /**
     * @param string $tooltip
     *
     * @return $this
     */
    public function setTooltip($tooltip)
    {
        $this->tooltip = $tooltip;
    
        return $this;
    }
    
    /**
     * @param int $maxrank
     *
     * @return $this
     */
    public function setMaxrank($maxrank)
    {
        $this->maxrank = $maxrank;
    
        return $this;
    }
    
    /**
     * @param string $costBurn
     *
     * @return $this
     */
    public function setCostBurn($costBurn)
    {
        $this->costBurn = $costBurn;
    
        return $this;
    }
    
    /**
     * @param string $rangeBurn
     *
     * @return $this
     */
    public function setRangeBurn($rangeBurn)
    {
        $this->rangeBurn = $rangeBurn;
    
        return $this;
    }
    
    /**
     * @param object $range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->range = $range;
    
        return $this;
    }
    
    /**
     * @param double[] $cooldown
     *
     * @return $this
     */
    public function setCooldown($cooldown)
    {
        $this->cooldown = $cooldown;
    
        return $this;
    }
    
    /**
     * @param int[] $cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    
        return $this;
    }
    
    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
    
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
    
    /**
     * @param string[] $effectBurn
     *
     * @return $this
     */
    public function setEffectBurn($effectBurn)
    {
        $this->effectBurn = $effectBurn;
    
        return $this;
    }
    
    /**
     * @param ImageDto[] $altimages
     *
     * @return $this
     */
    public function setAltimages($altimages)
    {
        foreach ($altimages as $key => $dtoData) {
            $this->altimages[$key] = new ImageDto($dtoData);
        }
    
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
    
}
