<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains champion stats data.
 *
 * @category LolStaticData
 */
class StatsDto extends BaseDto {
    /** @var double */
    protected $armorperlevel;
    
    /** @var double */
    protected $hpperlevel;
    
    /** @var double */
    protected $attackdamage;
    
    /** @var double */
    protected $mpperlevel;
    
    /** @var double */
    protected $attackspeedoffset;
    
    /** @var double */
    protected $armor;
    
    /** @var double */
    protected $hp;
    
    /** @var double */
    protected $hpregenperlevel;
    
    /** @var double */
    protected $spellblock;
    
    /** @var double */
    protected $attackrange;
    
    /** @var double */
    protected $movespeed;
    
    /** @var double */
    protected $attackdamageperlevel;
    
    /** @var double */
    protected $mpregenperlevel;
    
    /** @var double */
    protected $mp;
    
    /** @var double */
    protected $spellblockperlevel;
    
    /** @var double */
    protected $crit;
    
    /** @var double */
    protected $mpregen;
    
    /** @var double */
    protected $attackspeedperlevel;
    
    /** @var double */
    protected $hpregen;
    
    /** @var double */
    protected $critperlevel;
    
    /**
     * @return double
     */
    public function getArmorperlevel()
    {
        return $this->armorperlevel;
    }
    
    /**
     * @return double
     */
    public function getHpperlevel()
    {
        return $this->hpperlevel;
    }
    
    /**
     * @return double
     */
    public function getAttackdamage()
    {
        return $this->attackdamage;
    }
    
    /**
     * @return double
     */
    public function getMpperlevel()
    {
        return $this->mpperlevel;
    }
    
    /**
     * @return double
     */
    public function getAttackspeedoffset()
    {
        return $this->attackspeedoffset;
    }
    
    /**
     * @return double
     */
    public function getArmor()
    {
        return $this->armor;
    }
    
    /**
     * @return double
     */
    public function getHp()
    {
        return $this->hp;
    }
    
    /**
     * @return double
     */
    public function getHpregenperlevel()
    {
        return $this->hpregenperlevel;
    }
    
    /**
     * @return double
     */
    public function getSpellblock()
    {
        return $this->spellblock;
    }
    
    /**
     * @return double
     */
    public function getAttackrange()
    {
        return $this->attackrange;
    }
    
    /**
     * @return double
     */
    public function getMovespeed()
    {
        return $this->movespeed;
    }
    
    /**
     * @return double
     */
    public function getAttackdamageperlevel()
    {
        return $this->attackdamageperlevel;
    }
    
    /**
     * @return double
     */
    public function getMpregenperlevel()
    {
        return $this->mpregenperlevel;
    }
    
    /**
     * @return double
     */
    public function getMp()
    {
        return $this->mp;
    }
    
    /**
     * @return double
     */
    public function getSpellblockperlevel()
    {
        return $this->spellblockperlevel;
    }
    
    /**
     * @return double
     */
    public function getCrit()
    {
        return $this->crit;
    }
    
    /**
     * @return double
     */
    public function getMpregen()
    {
        return $this->mpregen;
    }
    
    /**
     * @return double
     */
    public function getAttackspeedperlevel()
    {
        return $this->attackspeedperlevel;
    }
    
    /**
     * @return double
     */
    public function getHpregen()
    {
        return $this->hpregen;
    }
    
    /**
     * @return double
     */
    public function getCritperlevel()
    {
        return $this->critperlevel;
    }
    
    /**
     * @param double $armorperlevel
     *
     * @return $this
     */
    public function setArmorperlevel($armorperlevel)
    {
        $this->armorperlevel = $armorperlevel;
    
        return $this;
    }
    
    /**
     * @param double $hpperlevel
     *
     * @return $this
     */
    public function setHpperlevel($hpperlevel)
    {
        $this->hpperlevel = $hpperlevel;
    
        return $this;
    }
    
    /**
     * @param double $attackdamage
     *
     * @return $this
     */
    public function setAttackdamage($attackdamage)
    {
        $this->attackdamage = $attackdamage;
    
        return $this;
    }
    
    /**
     * @param double $mpperlevel
     *
     * @return $this
     */
    public function setMpperlevel($mpperlevel)
    {
        $this->mpperlevel = $mpperlevel;
    
        return $this;
    }
    
    /**
     * @param double $attackspeedoffset
     *
     * @return $this
     */
    public function setAttackspeedoffset($attackspeedoffset)
    {
        $this->attackspeedoffset = $attackspeedoffset;
    
        return $this;
    }
    
    /**
     * @param double $armor
     *
     * @return $this
     */
    public function setArmor($armor)
    {
        $this->armor = $armor;
    
        return $this;
    }
    
    /**
     * @param double $hp
     *
     * @return $this
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    
        return $this;
    }
    
    /**
     * @param double $hpregenperlevel
     *
     * @return $this
     */
    public function setHpregenperlevel($hpregenperlevel)
    {
        $this->hpregenperlevel = $hpregenperlevel;
    
        return $this;
    }
    
    /**
     * @param double $spellblock
     *
     * @return $this
     */
    public function setSpellblock($spellblock)
    {
        $this->spellblock = $spellblock;
    
        return $this;
    }
    
    /**
     * @param double $attackrange
     *
     * @return $this
     */
    public function setAttackrange($attackrange)
    {
        $this->attackrange = $attackrange;
    
        return $this;
    }
    
    /**
     * @param double $movespeed
     *
     * @return $this
     */
    public function setMovespeed($movespeed)
    {
        $this->movespeed = $movespeed;
    
        return $this;
    }
    
    /**
     * @param double $attackdamageperlevel
     *
     * @return $this
     */
    public function setAttackdamageperlevel($attackdamageperlevel)
    {
        $this->attackdamageperlevel = $attackdamageperlevel;
    
        return $this;
    }
    
    /**
     * @param double $mpregenperlevel
     *
     * @return $this
     */
    public function setMpregenperlevel($mpregenperlevel)
    {
        $this->mpregenperlevel = $mpregenperlevel;
    
        return $this;
    }
    
    /**
     * @param double $mp
     *
     * @return $this
     */
    public function setMp($mp)
    {
        $this->mp = $mp;
    
        return $this;
    }
    
    /**
     * @param double $spellblockperlevel
     *
     * @return $this
     */
    public function setSpellblockperlevel($spellblockperlevel)
    {
        $this->spellblockperlevel = $spellblockperlevel;
    
        return $this;
    }
    
    /**
     * @param double $crit
     *
     * @return $this
     */
    public function setCrit($crit)
    {
        $this->crit = $crit;
    
        return $this;
    }
    
    /**
     * @param double $mpregen
     *
     * @return $this
     */
    public function setMpregen($mpregen)
    {
        $this->mpregen = $mpregen;
    
        return $this;
    }
    
    /**
     * @param double $attackspeedperlevel
     *
     * @return $this
     */
    public function setAttackspeedperlevel($attackspeedperlevel)
    {
        $this->attackspeedperlevel = $attackspeedperlevel;
    
        return $this;
    }
    
    /**
     * @param double $hpregen
     *
     * @return $this
     */
    public function setHpregen($hpregen)
    {
        $this->hpregen = $hpregen;
    
        return $this;
    }
    
    /**
     * @param double $critperlevel
     *
     * @return $this
     */
    public function setCritperlevel($critperlevel)
    {
        $this->critperlevel = $critperlevel;
    
        return $this;
    }
    
}
