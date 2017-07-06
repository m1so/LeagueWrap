<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains stats for inventory (e.g., runes and items).
 *
 * @category LolStaticData
 */
class InventoryDataStatsDto extends BaseDto {
    /** @var double */
    protected $PercentCritDamageMod;
    
    /** @var double */
    protected $PercentSpellBlockMod;
    
    /** @var double */
    protected $PercentHPRegenMod;
    
    /** @var double */
    protected $PercentMovementSpeedMod;
    
    /** @var double */
    protected $FlatSpellBlockMod;
    
    /** @var double */
    protected $FlatCritDamageMod;
    
    /** @var double */
    protected $FlatEnergyPoolMod;
    
    /** @var double */
    protected $PercentLifeStealMod;
    
    /** @var double */
    protected $FlatMPPoolMod;
    
    /** @var double */
    protected $FlatMovementSpeedMod;
    
    /** @var double */
    protected $PercentAttackSpeedMod;
    
    /** @var double */
    protected $FlatBlockMod;
    
    /** @var double */
    protected $PercentBlockMod;
    
    /** @var double */
    protected $FlatEnergyRegenMod;
    
    /** @var double */
    protected $PercentSpellVampMod;
    
    /** @var double */
    protected $FlatMPRegenMod;
    
    /** @var double */
    protected $PercentDodgeMod;
    
    /** @var double */
    protected $FlatAttackSpeedMod;
    
    /** @var double */
    protected $FlatArmorMod;
    
    /** @var double */
    protected $FlatHPRegenMod;
    
    /** @var double */
    protected $PercentMagicDamageMod;
    
    /** @var double */
    protected $PercentMPPoolMod;
    
    /** @var double */
    protected $FlatMagicDamageMod;
    
    /** @var double */
    protected $PercentMPRegenMod;
    
    /** @var double */
    protected $PercentPhysicalDamageMod;
    
    /** @var double */
    protected $FlatPhysicalDamageMod;
    
    /** @var double */
    protected $PercentHPPoolMod;
    
    /** @var double */
    protected $PercentArmorMod;
    
    /** @var double */
    protected $PercentCritChanceMod;
    
    /** @var double */
    protected $PercentEXPBonus;
    
    /** @var double */
    protected $FlatHPPoolMod;
    
    /** @var double */
    protected $FlatCritChanceMod;
    
    /** @var double */
    protected $FlatEXPBonus;
    
    /**
     * @return double
     */
    public function getPercentCritDamageMod()
    {
        return $this->PercentCritDamageMod;
    }
    
    /**
     * @return double
     */
    public function getPercentSpellBlockMod()
    {
        return $this->PercentSpellBlockMod;
    }
    
    /**
     * @return double
     */
    public function getPercentHPRegenMod()
    {
        return $this->PercentHPRegenMod;
    }
    
    /**
     * @return double
     */
    public function getPercentMovementSpeedMod()
    {
        return $this->PercentMovementSpeedMod;
    }
    
    /**
     * @return double
     */
    public function getFlatSpellBlockMod()
    {
        return $this->FlatSpellBlockMod;
    }
    
    /**
     * @return double
     */
    public function getFlatCritDamageMod()
    {
        return $this->FlatCritDamageMod;
    }
    
    /**
     * @return double
     */
    public function getFlatEnergyPoolMod()
    {
        return $this->FlatEnergyPoolMod;
    }
    
    /**
     * @return double
     */
    public function getPercentLifeStealMod()
    {
        return $this->PercentLifeStealMod;
    }
    
    /**
     * @return double
     */
    public function getFlatMPPoolMod()
    {
        return $this->FlatMPPoolMod;
    }
    
    /**
     * @return double
     */
    public function getFlatMovementSpeedMod()
    {
        return $this->FlatMovementSpeedMod;
    }
    
    /**
     * @return double
     */
    public function getPercentAttackSpeedMod()
    {
        return $this->PercentAttackSpeedMod;
    }
    
    /**
     * @return double
     */
    public function getFlatBlockMod()
    {
        return $this->FlatBlockMod;
    }
    
    /**
     * @return double
     */
    public function getPercentBlockMod()
    {
        return $this->PercentBlockMod;
    }
    
    /**
     * @return double
     */
    public function getFlatEnergyRegenMod()
    {
        return $this->FlatEnergyRegenMod;
    }
    
    /**
     * @return double
     */
    public function getPercentSpellVampMod()
    {
        return $this->PercentSpellVampMod;
    }
    
    /**
     * @return double
     */
    public function getFlatMPRegenMod()
    {
        return $this->FlatMPRegenMod;
    }
    
    /**
     * @return double
     */
    public function getPercentDodgeMod()
    {
        return $this->PercentDodgeMod;
    }
    
    /**
     * @return double
     */
    public function getFlatAttackSpeedMod()
    {
        return $this->FlatAttackSpeedMod;
    }
    
    /**
     * @return double
     */
    public function getFlatArmorMod()
    {
        return $this->FlatArmorMod;
    }
    
    /**
     * @return double
     */
    public function getFlatHPRegenMod()
    {
        return $this->FlatHPRegenMod;
    }
    
    /**
     * @return double
     */
    public function getPercentMagicDamageMod()
    {
        return $this->PercentMagicDamageMod;
    }
    
    /**
     * @return double
     */
    public function getPercentMPPoolMod()
    {
        return $this->PercentMPPoolMod;
    }
    
    /**
     * @return double
     */
    public function getFlatMagicDamageMod()
    {
        return $this->FlatMagicDamageMod;
    }
    
    /**
     * @return double
     */
    public function getPercentMPRegenMod()
    {
        return $this->PercentMPRegenMod;
    }
    
    /**
     * @return double
     */
    public function getPercentPhysicalDamageMod()
    {
        return $this->PercentPhysicalDamageMod;
    }
    
    /**
     * @return double
     */
    public function getFlatPhysicalDamageMod()
    {
        return $this->FlatPhysicalDamageMod;
    }
    
    /**
     * @return double
     */
    public function getPercentHPPoolMod()
    {
        return $this->PercentHPPoolMod;
    }
    
    /**
     * @return double
     */
    public function getPercentArmorMod()
    {
        return $this->PercentArmorMod;
    }
    
    /**
     * @return double
     */
    public function getPercentCritChanceMod()
    {
        return $this->PercentCritChanceMod;
    }
    
    /**
     * @return double
     */
    public function getPercentEXPBonus()
    {
        return $this->PercentEXPBonus;
    }
    
    /**
     * @return double
     */
    public function getFlatHPPoolMod()
    {
        return $this->FlatHPPoolMod;
    }
    
    /**
     * @return double
     */
    public function getFlatCritChanceMod()
    {
        return $this->FlatCritChanceMod;
    }
    
    /**
     * @return double
     */
    public function getFlatEXPBonus()
    {
        return $this->FlatEXPBonus;
    }
    
    /**
     * @param double $PercentCritDamageMod
     *
     * @return $this
     */
    public function setPercentCritDamageMod($PercentCritDamageMod)
    {
        $this->PercentCritDamageMod = $PercentCritDamageMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentSpellBlockMod
     *
     * @return $this
     */
    public function setPercentSpellBlockMod($PercentSpellBlockMod)
    {
        $this->PercentSpellBlockMod = $PercentSpellBlockMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentHPRegenMod
     *
     * @return $this
     */
    public function setPercentHPRegenMod($PercentHPRegenMod)
    {
        $this->PercentHPRegenMod = $PercentHPRegenMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentMovementSpeedMod
     *
     * @return $this
     */
    public function setPercentMovementSpeedMod($PercentMovementSpeedMod)
    {
        $this->PercentMovementSpeedMod = $PercentMovementSpeedMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatSpellBlockMod
     *
     * @return $this
     */
    public function setFlatSpellBlockMod($FlatSpellBlockMod)
    {
        $this->FlatSpellBlockMod = $FlatSpellBlockMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatCritDamageMod
     *
     * @return $this
     */
    public function setFlatCritDamageMod($FlatCritDamageMod)
    {
        $this->FlatCritDamageMod = $FlatCritDamageMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatEnergyPoolMod
     *
     * @return $this
     */
    public function setFlatEnergyPoolMod($FlatEnergyPoolMod)
    {
        $this->FlatEnergyPoolMod = $FlatEnergyPoolMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentLifeStealMod
     *
     * @return $this
     */
    public function setPercentLifeStealMod($PercentLifeStealMod)
    {
        $this->PercentLifeStealMod = $PercentLifeStealMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatMPPoolMod
     *
     * @return $this
     */
    public function setFlatMPPoolMod($FlatMPPoolMod)
    {
        $this->FlatMPPoolMod = $FlatMPPoolMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatMovementSpeedMod
     *
     * @return $this
     */
    public function setFlatMovementSpeedMod($FlatMovementSpeedMod)
    {
        $this->FlatMovementSpeedMod = $FlatMovementSpeedMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentAttackSpeedMod
     *
     * @return $this
     */
    public function setPercentAttackSpeedMod($PercentAttackSpeedMod)
    {
        $this->PercentAttackSpeedMod = $PercentAttackSpeedMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatBlockMod
     *
     * @return $this
     */
    public function setFlatBlockMod($FlatBlockMod)
    {
        $this->FlatBlockMod = $FlatBlockMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentBlockMod
     *
     * @return $this
     */
    public function setPercentBlockMod($PercentBlockMod)
    {
        $this->PercentBlockMod = $PercentBlockMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatEnergyRegenMod
     *
     * @return $this
     */
    public function setFlatEnergyRegenMod($FlatEnergyRegenMod)
    {
        $this->FlatEnergyRegenMod = $FlatEnergyRegenMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentSpellVampMod
     *
     * @return $this
     */
    public function setPercentSpellVampMod($PercentSpellVampMod)
    {
        $this->PercentSpellVampMod = $PercentSpellVampMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatMPRegenMod
     *
     * @return $this
     */
    public function setFlatMPRegenMod($FlatMPRegenMod)
    {
        $this->FlatMPRegenMod = $FlatMPRegenMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentDodgeMod
     *
     * @return $this
     */
    public function setPercentDodgeMod($PercentDodgeMod)
    {
        $this->PercentDodgeMod = $PercentDodgeMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatAttackSpeedMod
     *
     * @return $this
     */
    public function setFlatAttackSpeedMod($FlatAttackSpeedMod)
    {
        $this->FlatAttackSpeedMod = $FlatAttackSpeedMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatArmorMod
     *
     * @return $this
     */
    public function setFlatArmorMod($FlatArmorMod)
    {
        $this->FlatArmorMod = $FlatArmorMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatHPRegenMod
     *
     * @return $this
     */
    public function setFlatHPRegenMod($FlatHPRegenMod)
    {
        $this->FlatHPRegenMod = $FlatHPRegenMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentMagicDamageMod
     *
     * @return $this
     */
    public function setPercentMagicDamageMod($PercentMagicDamageMod)
    {
        $this->PercentMagicDamageMod = $PercentMagicDamageMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentMPPoolMod
     *
     * @return $this
     */
    public function setPercentMPPoolMod($PercentMPPoolMod)
    {
        $this->PercentMPPoolMod = $PercentMPPoolMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatMagicDamageMod
     *
     * @return $this
     */
    public function setFlatMagicDamageMod($FlatMagicDamageMod)
    {
        $this->FlatMagicDamageMod = $FlatMagicDamageMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentMPRegenMod
     *
     * @return $this
     */
    public function setPercentMPRegenMod($PercentMPRegenMod)
    {
        $this->PercentMPRegenMod = $PercentMPRegenMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentPhysicalDamageMod
     *
     * @return $this
     */
    public function setPercentPhysicalDamageMod($PercentPhysicalDamageMod)
    {
        $this->PercentPhysicalDamageMod = $PercentPhysicalDamageMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatPhysicalDamageMod
     *
     * @return $this
     */
    public function setFlatPhysicalDamageMod($FlatPhysicalDamageMod)
    {
        $this->FlatPhysicalDamageMod = $FlatPhysicalDamageMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentHPPoolMod
     *
     * @return $this
     */
    public function setPercentHPPoolMod($PercentHPPoolMod)
    {
        $this->PercentHPPoolMod = $PercentHPPoolMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentArmorMod
     *
     * @return $this
     */
    public function setPercentArmorMod($PercentArmorMod)
    {
        $this->PercentArmorMod = $PercentArmorMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentCritChanceMod
     *
     * @return $this
     */
    public function setPercentCritChanceMod($PercentCritChanceMod)
    {
        $this->PercentCritChanceMod = $PercentCritChanceMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentEXPBonus
     *
     * @return $this
     */
    public function setPercentEXPBonus($PercentEXPBonus)
    {
        $this->PercentEXPBonus = $PercentEXPBonus;
    
        return $this;
    }
    
    /**
     * @param double $FlatHPPoolMod
     *
     * @return $this
     */
    public function setFlatHPPoolMod($FlatHPPoolMod)
    {
        $this->FlatHPPoolMod = $FlatHPPoolMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatCritChanceMod
     *
     * @return $this
     */
    public function setFlatCritChanceMod($FlatCritChanceMod)
    {
        $this->FlatCritChanceMod = $FlatCritChanceMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatEXPBonus
     *
     * @return $this
     */
    public function setFlatEXPBonus($FlatEXPBonus)
    {
        $this->FlatEXPBonus = $FlatEXPBonus;
    
        return $this;
    }
    
}
