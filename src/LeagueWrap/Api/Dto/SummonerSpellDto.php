<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains summoner spell data.
 *
 * @category LolStaticData
 */
class SummonerSpellDto extends BaseDto {
    /** @var SpellVarsDto[] */
    protected $vars;
    
    /** @var ImageDto */
    protected $image;
    
    /** @var string */
    protected $costBurn;
    
    /** @var double[] */
    protected $cooldown;
    
    /** @var string[] */
    protected $effectBurn;
    
    /** @var int */
    protected $id;
    
    /** @var string */
    protected $cooldownBurn;
    
    /** @var string */
    protected $tooltip;
    
    /** @var int */
    protected $maxrank;
    
    /** @var string */
    protected $rangeBurn;
    
    /** @var string */
    protected $description;
    
    /** @var object[] */
    protected $effect;
    
    /** @var string */
    protected $key;
    
    /** @var LevelTipDto */
    protected $leveltip;
    
    /** @var string[] */
    protected $modes;
    
    /** @var string */
    protected $resource;
    
    /** @var string */
    protected $name;
    
    /** @var string */
    protected $costType;
    
    /** @var string */
    protected $sanitizedDescription;
    
    /** @var string */
    protected $sanitizedTooltip;
    
    /** @var object */
    protected $range;
    
    /** @var int[] */
    protected $cost;
    
    /** @var int */
    protected $summonerLevel;
    
    /**
     * @return SpellVarsDto[]
     */
    public function getVars()
    {
        return $this->vars;
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
    public function getCostBurn()
    {
        return $this->costBurn;
    }
    
    /**
     * @return double[]
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }
    
    /**
     * @return string[]
     */
    public function getEffectBurn()
    {
        return $this->effectBurn;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
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
    public function getRangeBurn()
    {
        return $this->rangeBurn;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * @return LevelTipDto
     */
    public function getLeveltip()
    {
        return $this->leveltip;
    }
    
    /**
     * @return string[]
     */
    public function getModes()
    {
        return $this->modes;
    }
    
    /**
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
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
    public function getCostType()
    {
        return $this->costType;
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
     * @return object
     */
    public function getRange()
    {
        return $this->range;
    }
    
    /**
     * @return int[]
     */
    public function getCost()
    {
        return $this->cost;
    }
    
    /**
     * @return int
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
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
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
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
     * @param string[] $modes
     *
     * @return $this
     */
    public function setModes($modes)
    {
        $this->modes = $modes;
    
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
     * @param int $summonerLevel
     *
     * @return $this
     */
    public function setSummonerLevel($summonerLevel)
    {
        $this->summonerLevel = $summonerLevel;
    
        return $this;
    }
    
}
