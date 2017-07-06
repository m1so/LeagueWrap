<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion data.
 *
 * @category LolStaticData
 */
class ChampionDto extends BaseDto {
    /** @var InfoDto */
    protected $info;
    
    /** @var string[] */
    protected $enemytips;
    
    /** @var StatsDto */
    protected $stats;
    
    /** @var string */
    protected $name;
    
    /** @var string */
    protected $title;
    
    /** @var ImageDto */
    protected $image;
    
    /** @var string[] */
    protected $tags;
    
    /** @var string */
    protected $partype;
    
    /** @var SkinDto[] */
    protected $skins;
    
    /** @var PassiveDto */
    protected $passive;
    
    /** @var RecommendedDto[] */
    protected $recommended;
    
    /** @var string[] */
    protected $allytips;
    
    /** @var string */
    protected $key;
    
    /** @var string */
    protected $lore;
    
    /** @var int */
    protected $id;
    
    /** @var string */
    protected $blurb;
    
    /** @var ChampionSpellDto[] */
    protected $spells;
    
    /**
     * @return InfoDto
     */
    public function getInfo()
    {
        return $this->info;
    }
    
    /**
     * @return string[]
     */
    public function getEnemytips()
    {
        return $this->enemytips;
    }
    
    /**
     * @return StatsDto
     */
    public function getStats()
    {
        return $this->stats;
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
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @return ImageDto
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    /**
     * @return string
     */
    public function getPartype()
    {
        return $this->partype;
    }
    
    /**
     * @return SkinDto[]
     */
    public function getSkins()
    {
        return $this->skins;
    }
    
    /**
     * @return PassiveDto
     */
    public function getPassive()
    {
        return $this->passive;
    }
    
    /**
     * @return RecommendedDto[]
     */
    public function getRecommended()
    {
        return $this->recommended;
    }
    
    /**
     * @return string[]
     */
    public function getAllytips()
    {
        return $this->allytips;
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
    public function getLore()
    {
        return $this->lore;
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
    public function getBlurb()
    {
        return $this->blurb;
    }
    
    /**
     * @return ChampionSpellDto[]
     */
    public function getSpells()
    {
        return $this->spells;
    }
    
    /**
     * @param InfoDto $info
     *
     * @return $this
     */
    public function setInfo($info)
    {
        $this->info = new InfoDto($info);
    
        return $this;
    }
    
    /**
     * @param string[] $enemytips
     *
     * @return $this
     */
    public function setEnemytips($enemytips)
    {
        $this->enemytips = $enemytips;
    
        return $this;
    }
    
    /**
     * @param StatsDto $stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->stats = new StatsDto($stats);
    
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
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
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
     * @param string[] $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }
    
    /**
     * @param string $partype
     *
     * @return $this
     */
    public function setPartype($partype)
    {
        $this->partype = $partype;
    
        return $this;
    }
    
    /**
     * @param SkinDto[] $skins
     *
     * @return $this
     */
    public function setSkins($skins)
    {
        foreach ($skins as $key => $dtoData) {
            $this->skins[$key] = new SkinDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param PassiveDto $passive
     *
     * @return $this
     */
    public function setPassive($passive)
    {
        $this->passive = new PassiveDto($passive);
    
        return $this;
    }
    
    /**
     * @param RecommendedDto[] $recommended
     *
     * @return $this
     */
    public function setRecommended($recommended)
    {
        foreach ($recommended as $key => $dtoData) {
            $this->recommended[$key] = new RecommendedDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param string[] $allytips
     *
     * @return $this
     */
    public function setAllytips($allytips)
    {
        $this->allytips = $allytips;
    
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
     * @param string $lore
     *
     * @return $this
     */
    public function setLore($lore)
    {
        $this->lore = $lore;
    
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
     * @param string $blurb
     *
     * @return $this
     */
    public function setBlurb($blurb)
    {
        $this->blurb = $blurb;
    
        return $this;
    }
    
    /**
     * @param ChampionSpellDto[] $spells
     *
     * @return $this
     */
    public function setSpells($spells)
    {
        foreach ($spells as $key => $dtoData) {
            $this->spells[$key] = new ChampionSpellDto($dtoData);
        }
    
        return $this;
    }
    
}
