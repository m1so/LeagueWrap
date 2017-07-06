<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains item data.
 *
 * @category LolStaticData
 */
class ItemDto extends BaseDto {
    /** @var GoldDto */
    protected $gold;
    
    /** @var string */
    protected $plaintext;
    
    /** @var bool */
    protected $hideFromAll;
    
    /** @var bool */
    protected $inStore;
    
    /** @var string[] */
    protected $into;
    
    /** @var int */
    protected $id;
    
    /** @var InventoryDataStatsDto */
    protected $stats;
    
    /** @var string */
    protected $colloq;
    
    /** @var bool[] Map[string, boolean] */
    protected $maps;
    
    /** @var int */
    protected $specialRecipe;
    
    /** @var ImageDto */
    protected $image;
    
    /** @var string */
    protected $description;
    
    /** @var string[] */
    protected $tags;
    
    /** @var string[] Map[string, string] */
    protected $effect;
    
    /** @var string */
    protected $requiredChampion;
    
    /** @var string[] */
    protected $from;
    
    /** @var string */
    protected $group;
    
    /** @var bool */
    protected $consumeOnFull;
    
    /** @var string */
    protected $name;
    
    /** @var bool */
    protected $consumed;
    
    /** @var string */
    protected $sanitizedDescription;
    
    /** @var int */
    protected $depth;
    
    /** @var int */
    protected $stacks;
    
    /**
     * @return GoldDto
     */
    public function getGold()
    {
        return $this->gold;
    }
    
    /**
     * @return string
     */
    public function getPlaintext()
    {
        return $this->plaintext;
    }
    
    /**
     * @return bool
     */
    public function isHideFromAll()
    {
        return $this->hideFromAll;
    }
    
    /**
     * @return bool
     */
    public function isInStore()
    {
        return $this->inStore;
    }
    
    /**
     * @return string[]
     */
    public function getInto()
    {
        return $this->into;
    }
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return InventoryDataStatsDto
     */
    public function getStats()
    {
        return $this->stats;
    }
    
    /**
     * @return string
     */
    public function getColloq()
    {
        return $this->colloq;
    }
    
    /**
     * @return bool[]
     */
    public function getMaps()
    {
        return $this->maps;
    }
    
    /**
     * @return int
     */
    public function getSpecialRecipe()
    {
        return $this->specialRecipe;
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
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    /**
     * @return string[]
     */
    public function getEffect()
    {
        return $this->effect;
    }
    
    /**
     * @return string
     */
    public function getRequiredChampion()
    {
        return $this->requiredChampion;
    }
    
    /**
     * @return string[]
     */
    public function getFrom()
    {
        return $this->from;
    }
    
    /**
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }
    
    /**
     * @return bool
     */
    public function isConsumeOnFull()
    {
        return $this->consumeOnFull;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return bool
     */
    public function isConsumed()
    {
        return $this->consumed;
    }
    
    /**
     * @return string
     */
    public function getSanitizedDescription()
    {
        return $this->sanitizedDescription;
    }
    
    /**
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }
    
    /**
     * @return int
     */
    public function getStacks()
    {
        return $this->stacks;
    }
    
    /**
     * @param GoldDto $gold
     *
     * @return $this
     */
    public function setGold($gold)
    {
        $this->gold = new GoldDto($gold);
    
        return $this;
    }
    
    /**
     * @param string $plaintext
     *
     * @return $this
     */
    public function setPlaintext($plaintext)
    {
        $this->plaintext = $plaintext;
    
        return $this;
    }
    
    /**
     * @param bool $hideFromAll
     *
     * @return $this
     */
    public function setHideFromAll($hideFromAll)
    {
        $this->hideFromAll = $hideFromAll;
    
        return $this;
    }
    
    /**
     * @param bool $inStore
     *
     * @return $this
     */
    public function setInStore($inStore)
    {
        $this->inStore = $inStore;
    
        return $this;
    }
    
    /**
     * @param string[] $into
     *
     * @return $this
     */
    public function setInto($into)
    {
        $this->into = $into;
    
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
     * @param InventoryDataStatsDto $stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->stats = new InventoryDataStatsDto($stats);
    
        return $this;
    }
    
    /**
     * @param string $colloq
     *
     * @return $this
     */
    public function setColloq($colloq)
    {
        $this->colloq = $colloq;
    
        return $this;
    }
    
    /**
     * @param bool[] $maps Map[string, boolean]
     *
     * @return $this
     */
    public function setMaps($maps)
    {
        $this->maps = $maps;
    
        return $this;
    }
    
    /**
     * @param int $specialRecipe
     *
     * @return $this
     */
    public function setSpecialRecipe($specialRecipe)
    {
        $this->specialRecipe = $specialRecipe;
    
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
     * @param string[] $effect Map[string, string]
     *
     * @return $this
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;
    
        return $this;
    }
    
    /**
     * @param string $requiredChampion
     *
     * @return $this
     */
    public function setRequiredChampion($requiredChampion)
    {
        $this->requiredChampion = $requiredChampion;
    
        return $this;
    }
    
    /**
     * @param string[] $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
    
        return $this;
    }
    
    /**
     * @param string $group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->group = $group;
    
        return $this;
    }
    
    /**
     * @param bool $consumeOnFull
     *
     * @return $this
     */
    public function setConsumeOnFull($consumeOnFull)
    {
        $this->consumeOnFull = $consumeOnFull;
    
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
     * @param bool $consumed
     *
     * @return $this
     */
    public function setConsumed($consumed)
    {
        $this->consumed = $consumed;
    
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
     * @param int $depth
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
    
        return $this;
    }
    
    /**
     * @param int $stacks
     *
     * @return $this
     */
    public function setStacks($stacks)
    {
        $this->stacks = $stacks;
    
        return $this;
    }
    
}
