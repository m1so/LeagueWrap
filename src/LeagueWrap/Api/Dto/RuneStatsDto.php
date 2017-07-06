<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * This object contains stats for runes.
 *
 * @category LolStaticData
 */
class RuneStatsDto extends BaseDto {
    /** @var double */
    protected $PercentTimeDeadModPerLevel;
    
    /** @var double */
    protected $PercentArmorPenetrationModPerLevel;
    
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
    protected $FlatEnergyRegenModPerLevel;
    
    /** @var double */
    protected $FlatEnergyPoolMod;
    
    /** @var double */
    protected $FlatMagicPenetrationModPerLevel;
    
    /** @var double */
    protected $PercentLifeStealMod;
    
    /** @var double */
    protected $FlatMPPoolMod;
    
    /** @var double */
    protected $PercentCooldownMod;
    
    /** @var double */
    protected $PercentMagicPenetrationMod;
    
    /** @var double */
    protected $FlatArmorPenetrationModPerLevel;
    
    /** @var double */
    protected $FlatMovementSpeedMod;
    
    /** @var double */
    protected $FlatTimeDeadModPerLevel;
    
    /** @var double */
    protected $FlatArmorModPerLevel;
    
    /** @var double */
    protected $PercentAttackSpeedMod;
    
    /** @var double */
    protected $FlatDodgeModPerLevel;
    
    /** @var double */
    protected $PercentMagicDamageMod;
    
    /** @var double */
    protected $PercentBlockMod;
    
    /** @var double */
    protected $FlatDodgeMod;
    
    /** @var double */
    protected $FlatEnergyRegenMod;
    
    /** @var double */
    protected $FlatHPModPerLevel;
    
    /** @var double */
    protected $PercentAttackSpeedModPerLevel;
    
    /** @var double */
    protected $PercentSpellVampMod;
    
    /** @var double */
    protected $FlatMPRegenMod;
    
    /** @var double */
    protected $PercentHPPoolMod;
    
    /** @var double */
    protected $PercentDodgeMod;
    
    /** @var double */
    protected $FlatAttackSpeedMod;
    
    /** @var double */
    protected $FlatArmorMod;
    
    /** @var double */
    protected $FlatMagicDamageModPerLevel;
    
    /** @var double */
    protected $FlatHPRegenMod;
    
    /** @var double */
    protected $PercentPhysicalDamageMod;
    
    /** @var double */
    protected $FlatCritChanceModPerLevel;
    
    /** @var double */
    protected $FlatSpellBlockModPerLevel;
    
    /** @var double */
    protected $PercentTimeDeadMod;
    
    /** @var double */
    protected $FlatBlockMod;
    
    /** @var double */
    protected $PercentMPPoolMod;
    
    /** @var double */
    protected $FlatMagicDamageMod;
    
    /** @var double */
    protected $PercentMPRegenMod;
    
    /** @var double */
    protected $PercentMovementSpeedModPerLevel;
    
    /** @var double */
    protected $PercentCooldownModPerLevel;
    
    /** @var double */
    protected $FlatMPModPerLevel;
    
    /** @var double */
    protected $FlatEnergyModPerLevel;
    
    /** @var double */
    protected $FlatPhysicalDamageMod;
    
    /** @var double */
    protected $FlatHPRegenModPerLevel;
    
    /** @var double */
    protected $FlatCritDamageMod;
    
    /** @var double */
    protected $PercentArmorMod;
    
    /** @var double */
    protected $FlatMagicPenetrationMod;
    
    /** @var double */
    protected $PercentCritChanceMod;
    
    /** @var double */
    protected $FlatPhysicalDamageModPerLevel;
    
    /** @var double */
    protected $PercentArmorPenetrationMod;
    
    /** @var double */
    protected $PercentEXPBonus;
    
    /** @var double */
    protected $FlatMPRegenModPerLevel;
    
    /** @var double */
    protected $PercentMagicPenetrationModPerLevel;
    
    /** @var double */
    protected $FlatTimeDeadMod;
    
    /** @var double */
    protected $FlatMovementSpeedModPerLevel;
    
    /** @var double */
    protected $FlatGoldPer10Mod;
    
    /** @var double */
    protected $FlatArmorPenetrationMod;
    
    /** @var double */
    protected $FlatCritDamageModPerLevel;
    
    /** @var double */
    protected $FlatHPPoolMod;
    
    /** @var double */
    protected $FlatCritChanceMod;
    
    /** @var double */
    protected $FlatEXPBonus;
    
    /**
     * @return double
     */
    public function getPercentTimeDeadModPerLevel()
    {
        return $this->PercentTimeDeadModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getPercentArmorPenetrationModPerLevel()
    {
        return $this->PercentArmorPenetrationModPerLevel;
    }
    
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
    public function getFlatEnergyRegenModPerLevel()
    {
        return $this->FlatEnergyRegenModPerLevel;
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
    public function getFlatMagicPenetrationModPerLevel()
    {
        return $this->FlatMagicPenetrationModPerLevel;
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
    public function getPercentCooldownMod()
    {
        return $this->PercentCooldownMod;
    }
    
    /**
     * @return double
     */
    public function getPercentMagicPenetrationMod()
    {
        return $this->PercentMagicPenetrationMod;
    }
    
    /**
     * @return double
     */
    public function getFlatArmorPenetrationModPerLevel()
    {
        return $this->FlatArmorPenetrationModPerLevel;
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
    public function getFlatTimeDeadModPerLevel()
    {
        return $this->FlatTimeDeadModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getFlatArmorModPerLevel()
    {
        return $this->FlatArmorModPerLevel;
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
    public function getFlatDodgeModPerLevel()
    {
        return $this->FlatDodgeModPerLevel;
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
    public function getPercentBlockMod()
    {
        return $this->PercentBlockMod;
    }
    
    /**
     * @return double
     */
    public function getFlatDodgeMod()
    {
        return $this->FlatDodgeMod;
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
    public function getFlatHPModPerLevel()
    {
        return $this->FlatHPModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getPercentAttackSpeedModPerLevel()
    {
        return $this->PercentAttackSpeedModPerLevel;
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
    public function getPercentHPPoolMod()
    {
        return $this->PercentHPPoolMod;
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
    public function getFlatMagicDamageModPerLevel()
    {
        return $this->FlatMagicDamageModPerLevel;
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
    public function getPercentPhysicalDamageMod()
    {
        return $this->PercentPhysicalDamageMod;
    }
    
    /**
     * @return double
     */
    public function getFlatCritChanceModPerLevel()
    {
        return $this->FlatCritChanceModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getFlatSpellBlockModPerLevel()
    {
        return $this->FlatSpellBlockModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getPercentTimeDeadMod()
    {
        return $this->PercentTimeDeadMod;
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
    public function getPercentMovementSpeedModPerLevel()
    {
        return $this->PercentMovementSpeedModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getPercentCooldownModPerLevel()
    {
        return $this->PercentCooldownModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getFlatMPModPerLevel()
    {
        return $this->FlatMPModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getFlatEnergyModPerLevel()
    {
        return $this->FlatEnergyModPerLevel;
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
    public function getFlatHPRegenModPerLevel()
    {
        return $this->FlatHPRegenModPerLevel;
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
    public function getPercentArmorMod()
    {
        return $this->PercentArmorMod;
    }
    
    /**
     * @return double
     */
    public function getFlatMagicPenetrationMod()
    {
        return $this->FlatMagicPenetrationMod;
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
    public function getFlatPhysicalDamageModPerLevel()
    {
        return $this->FlatPhysicalDamageModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getPercentArmorPenetrationMod()
    {
        return $this->PercentArmorPenetrationMod;
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
    public function getFlatMPRegenModPerLevel()
    {
        return $this->FlatMPRegenModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getPercentMagicPenetrationModPerLevel()
    {
        return $this->PercentMagicPenetrationModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getFlatTimeDeadMod()
    {
        return $this->FlatTimeDeadMod;
    }
    
    /**
     * @return double
     */
    public function getFlatMovementSpeedModPerLevel()
    {
        return $this->FlatMovementSpeedModPerLevel;
    }
    
    /**
     * @return double
     */
    public function getFlatGoldPer10Mod()
    {
        return $this->FlatGoldPer10Mod;
    }
    
    /**
     * @return double
     */
    public function getFlatArmorPenetrationMod()
    {
        return $this->FlatArmorPenetrationMod;
    }
    
    /**
     * @return double
     */
    public function getFlatCritDamageModPerLevel()
    {
        return $this->FlatCritDamageModPerLevel;
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
     * @param double $PercentTimeDeadModPerLevel
     *
     * @return $this
     */
    public function setPercentTimeDeadModPerLevel($PercentTimeDeadModPerLevel)
    {
        $this->PercentTimeDeadModPerLevel = $PercentTimeDeadModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $PercentArmorPenetrationModPerLevel
     *
     * @return $this
     */
    public function setPercentArmorPenetrationModPerLevel($PercentArmorPenetrationModPerLevel)
    {
        $this->PercentArmorPenetrationModPerLevel = $PercentArmorPenetrationModPerLevel;
    
        return $this;
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
     * @param double $FlatEnergyRegenModPerLevel
     *
     * @return $this
     */
    public function setFlatEnergyRegenModPerLevel($FlatEnergyRegenModPerLevel)
    {
        $this->FlatEnergyRegenModPerLevel = $FlatEnergyRegenModPerLevel;
    
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
     * @param double $FlatMagicPenetrationModPerLevel
     *
     * @return $this
     */
    public function setFlatMagicPenetrationModPerLevel($FlatMagicPenetrationModPerLevel)
    {
        $this->FlatMagicPenetrationModPerLevel = $FlatMagicPenetrationModPerLevel;
    
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
     * @param double $PercentCooldownMod
     *
     * @return $this
     */
    public function setPercentCooldownMod($PercentCooldownMod)
    {
        $this->PercentCooldownMod = $PercentCooldownMod;
    
        return $this;
    }
    
    /**
     * @param double $PercentMagicPenetrationMod
     *
     * @return $this
     */
    public function setPercentMagicPenetrationMod($PercentMagicPenetrationMod)
    {
        $this->PercentMagicPenetrationMod = $PercentMagicPenetrationMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatArmorPenetrationModPerLevel
     *
     * @return $this
     */
    public function setFlatArmorPenetrationModPerLevel($FlatArmorPenetrationModPerLevel)
    {
        $this->FlatArmorPenetrationModPerLevel = $FlatArmorPenetrationModPerLevel;
    
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
     * @param double $FlatTimeDeadModPerLevel
     *
     * @return $this
     */
    public function setFlatTimeDeadModPerLevel($FlatTimeDeadModPerLevel)
    {
        $this->FlatTimeDeadModPerLevel = $FlatTimeDeadModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $FlatArmorModPerLevel
     *
     * @return $this
     */
    public function setFlatArmorModPerLevel($FlatArmorModPerLevel)
    {
        $this->FlatArmorModPerLevel = $FlatArmorModPerLevel;
    
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
     * @param double $FlatDodgeModPerLevel
     *
     * @return $this
     */
    public function setFlatDodgeModPerLevel($FlatDodgeModPerLevel)
    {
        $this->FlatDodgeModPerLevel = $FlatDodgeModPerLevel;
    
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
     * @param double $FlatDodgeMod
     *
     * @return $this
     */
    public function setFlatDodgeMod($FlatDodgeMod)
    {
        $this->FlatDodgeMod = $FlatDodgeMod;
    
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
     * @param double $FlatHPModPerLevel
     *
     * @return $this
     */
    public function setFlatHPModPerLevel($FlatHPModPerLevel)
    {
        $this->FlatHPModPerLevel = $FlatHPModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $PercentAttackSpeedModPerLevel
     *
     * @return $this
     */
    public function setPercentAttackSpeedModPerLevel($PercentAttackSpeedModPerLevel)
    {
        $this->PercentAttackSpeedModPerLevel = $PercentAttackSpeedModPerLevel;
    
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
     * @param double $FlatMagicDamageModPerLevel
     *
     * @return $this
     */
    public function setFlatMagicDamageModPerLevel($FlatMagicDamageModPerLevel)
    {
        $this->FlatMagicDamageModPerLevel = $FlatMagicDamageModPerLevel;
    
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
     * @param double $FlatCritChanceModPerLevel
     *
     * @return $this
     */
    public function setFlatCritChanceModPerLevel($FlatCritChanceModPerLevel)
    {
        $this->FlatCritChanceModPerLevel = $FlatCritChanceModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $FlatSpellBlockModPerLevel
     *
     * @return $this
     */
    public function setFlatSpellBlockModPerLevel($FlatSpellBlockModPerLevel)
    {
        $this->FlatSpellBlockModPerLevel = $FlatSpellBlockModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $PercentTimeDeadMod
     *
     * @return $this
     */
    public function setPercentTimeDeadMod($PercentTimeDeadMod)
    {
        $this->PercentTimeDeadMod = $PercentTimeDeadMod;
    
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
     * @param double $PercentMovementSpeedModPerLevel
     *
     * @return $this
     */
    public function setPercentMovementSpeedModPerLevel($PercentMovementSpeedModPerLevel)
    {
        $this->PercentMovementSpeedModPerLevel = $PercentMovementSpeedModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $PercentCooldownModPerLevel
     *
     * @return $this
     */
    public function setPercentCooldownModPerLevel($PercentCooldownModPerLevel)
    {
        $this->PercentCooldownModPerLevel = $PercentCooldownModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $FlatMPModPerLevel
     *
     * @return $this
     */
    public function setFlatMPModPerLevel($FlatMPModPerLevel)
    {
        $this->FlatMPModPerLevel = $FlatMPModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $FlatEnergyModPerLevel
     *
     * @return $this
     */
    public function setFlatEnergyModPerLevel($FlatEnergyModPerLevel)
    {
        $this->FlatEnergyModPerLevel = $FlatEnergyModPerLevel;
    
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
     * @param double $FlatHPRegenModPerLevel
     *
     * @return $this
     */
    public function setFlatHPRegenModPerLevel($FlatHPRegenModPerLevel)
    {
        $this->FlatHPRegenModPerLevel = $FlatHPRegenModPerLevel;
    
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
     * @param double $FlatMagicPenetrationMod
     *
     * @return $this
     */
    public function setFlatMagicPenetrationMod($FlatMagicPenetrationMod)
    {
        $this->FlatMagicPenetrationMod = $FlatMagicPenetrationMod;
    
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
     * @param double $FlatPhysicalDamageModPerLevel
     *
     * @return $this
     */
    public function setFlatPhysicalDamageModPerLevel($FlatPhysicalDamageModPerLevel)
    {
        $this->FlatPhysicalDamageModPerLevel = $FlatPhysicalDamageModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $PercentArmorPenetrationMod
     *
     * @return $this
     */
    public function setPercentArmorPenetrationMod($PercentArmorPenetrationMod)
    {
        $this->PercentArmorPenetrationMod = $PercentArmorPenetrationMod;
    
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
     * @param double $FlatMPRegenModPerLevel
     *
     * @return $this
     */
    public function setFlatMPRegenModPerLevel($FlatMPRegenModPerLevel)
    {
        $this->FlatMPRegenModPerLevel = $FlatMPRegenModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $PercentMagicPenetrationModPerLevel
     *
     * @return $this
     */
    public function setPercentMagicPenetrationModPerLevel($PercentMagicPenetrationModPerLevel)
    {
        $this->PercentMagicPenetrationModPerLevel = $PercentMagicPenetrationModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $FlatTimeDeadMod
     *
     * @return $this
     */
    public function setFlatTimeDeadMod($FlatTimeDeadMod)
    {
        $this->FlatTimeDeadMod = $FlatTimeDeadMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatMovementSpeedModPerLevel
     *
     * @return $this
     */
    public function setFlatMovementSpeedModPerLevel($FlatMovementSpeedModPerLevel)
    {
        $this->FlatMovementSpeedModPerLevel = $FlatMovementSpeedModPerLevel;
    
        return $this;
    }
    
    /**
     * @param double $FlatGoldPer10Mod
     *
     * @return $this
     */
    public function setFlatGoldPer10Mod($FlatGoldPer10Mod)
    {
        $this->FlatGoldPer10Mod = $FlatGoldPer10Mod;
    
        return $this;
    }
    
    /**
     * @param double $FlatArmorPenetrationMod
     *
     * @return $this
     */
    public function setFlatArmorPenetrationMod($FlatArmorPenetrationMod)
    {
        $this->FlatArmorPenetrationMod = $FlatArmorPenetrationMod;
    
        return $this;
    }
    
    /**
     * @param double $FlatCritDamageModPerLevel
     *
     * @return $this
     */
    public function setFlatCritDamageModPerLevel($FlatCritDamageModPerLevel)
    {
        $this->FlatCritDamageModPerLevel = $FlatCritDamageModPerLevel;
    
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
