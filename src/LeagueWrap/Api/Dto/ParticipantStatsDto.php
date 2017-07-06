<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class ParticipantStatsDto extends BaseDto {
    /** @var double */
    protected $physicalDamageDealt;
    
    /** @var int */
    protected $neutralMinionsKilledTeamJungle;
    
    /** @var double */
    protected $magicDamageDealt;
    
    /** @var int */
    protected $totalPlayerScore;
    
    /** @var int */
    protected $deaths;
    
    /** @var bool */
    protected $win;
    
    /** @var int */
    protected $neutralMinionsKilledEnemyJungle;
    
    /** @var int */
    protected $altarsCaptured;
    
    /** @var int */
    protected $largestCriticalStrike;
    
    /** @var double */
    protected $totalDamageDealt;
    
    /** @var double */
    protected $magicDamageDealtToChampions;
    
    /** @var int */
    protected $visionWardsBoughtInGame;
    
    /** @var double */
    protected $damageDealtToObjectives;
    
    /** @var int */
    protected $largestKillingSpree;
    
    /** @var int */
    protected $item1;
    
    /** @var int */
    protected $quadraKills;
    
    /** @var int */
    protected $teamObjective;
    
    /** @var int */
    protected $totalTimeCrowdControlDealt;
    
    /** @var int */
    protected $longestTimeSpentLiving;
    
    /** @var int */
    protected $wardsKilled;
    
    /** @var bool */
    protected $firstTowerAssist;
    
    /** @var bool */
    protected $firstTowerKill;
    
    /** @var int */
    protected $item2;
    
    /** @var int */
    protected $item3;
    
    /** @var int */
    protected $item0;
    
    /** @var bool */
    protected $firstBloodAssist;
    
    /** @var double */
    protected $visionScore;
    
    /** @var int */
    protected $wardsPlaced;
    
    /** @var int */
    protected $item4;
    
    /** @var int */
    protected $item5;
    
    /** @var int */
    protected $item6;
    
    /** @var int */
    protected $turretKills;
    
    /** @var int */
    protected $tripleKills;
    
    /** @var double */
    protected $damageSelfMitigated;
    
    /** @var int */
    protected $champLevel;
    
    /** @var int */
    protected $nodeNeutralizeAssist;
    
    /** @var bool */
    protected $firstInhibitorKill;
    
    /** @var int */
    protected $goldEarned;
    
    /** @var double */
    protected $magicalDamageTaken;
    
    /** @var int */
    protected $kills;
    
    /** @var int */
    protected $doubleKills;
    
    /** @var int */
    protected $nodeCaptureAssist;
    
    /** @var double */
    protected $trueDamageTaken;
    
    /** @var int */
    protected $nodeNeutralize;
    
    /** @var bool */
    protected $firstInhibitorAssist;
    
    /** @var int */
    protected $assists;
    
    /** @var int */
    protected $unrealKills;
    
    /** @var int */
    protected $neutralMinionsKilled;
    
    /** @var int */
    protected $objectivePlayerScore;
    
    /** @var int */
    protected $combatPlayerScore;
    
    /** @var double */
    protected $damageDealtToTurrets;
    
    /** @var int */
    protected $altarsNeutralized;
    
    /** @var double */
    protected $physicalDamageDealtToChampions;
    
    /** @var int */
    protected $goldSpent;
    
    /** @var double */
    protected $trueDamageDealt;
    
    /** @var double */
    protected $trueDamageDealtToChampions;
    
    /** @var int */
    protected $participantId;
    
    /** @var int */
    protected $pentaKills;
    
    /** @var double */
    protected $totalHeal;
    
    /** @var int */
    protected $totalMinionsKilled;
    
    /** @var bool */
    protected $firstBloodKill;
    
    /** @var int */
    protected $nodeCapture;
    
    /** @var int */
    protected $largestMultiKill;
    
    /** @var int */
    protected $sightWardsBoughtInGame;
    
    /** @var double */
    protected $totalDamageDealtToChampions;
    
    /** @var int */
    protected $totalUnitsHealed;
    
    /** @var int */
    protected $inhibitorKills;
    
    /** @var int */
    protected $totalScoreRank;
    
    /** @var double */
    protected $totalDamageTaken;
    
    /** @var int */
    protected $killingSprees;
    
    /** @var double */
    protected $timeCCingOthers;
    
    /** @var double */
    protected $physicalDamageTaken;
    
    /**
     * @return double
     */
    public function getPhysicalDamageDealt()
    {
        return $this->physicalDamageDealt;
    }
    
    /**
     * @return int
     */
    public function getNeutralMinionsKilledTeamJungle()
    {
        return $this->neutralMinionsKilledTeamJungle;
    }
    
    /**
     * @return double
     */
    public function getMagicDamageDealt()
    {
        return $this->magicDamageDealt;
    }
    
    /**
     * @return int
     */
    public function getTotalPlayerScore()
    {
        return $this->totalPlayerScore;
    }
    
    /**
     * @return int
     */
    public function getDeaths()
    {
        return $this->deaths;
    }
    
    /**
     * @return bool
     */
    public function isWin()
    {
        return $this->win;
    }
    
    /**
     * @return int
     */
    public function getNeutralMinionsKilledEnemyJungle()
    {
        return $this->neutralMinionsKilledEnemyJungle;
    }
    
    /**
     * @return int
     */
    public function getAltarsCaptured()
    {
        return $this->altarsCaptured;
    }
    
    /**
     * @return int
     */
    public function getLargestCriticalStrike()
    {
        return $this->largestCriticalStrike;
    }
    
    /**
     * @return double
     */
    public function getTotalDamageDealt()
    {
        return $this->totalDamageDealt;
    }
    
    /**
     * @return double
     */
    public function getMagicDamageDealtToChampions()
    {
        return $this->magicDamageDealtToChampions;
    }
    
    /**
     * @return int
     */
    public function getVisionWardsBoughtInGame()
    {
        return $this->visionWardsBoughtInGame;
    }
    
    /**
     * @return double
     */
    public function getDamageDealtToObjectives()
    {
        return $this->damageDealtToObjectives;
    }
    
    /**
     * @return int
     */
    public function getLargestKillingSpree()
    {
        return $this->largestKillingSpree;
    }
    
    /**
     * @return int
     */
    public function getItem1()
    {
        return $this->item1;
    }
    
    /**
     * @return int
     */
    public function getQuadraKills()
    {
        return $this->quadraKills;
    }
    
    /**
     * @return int
     */
    public function getTeamObjective()
    {
        return $this->teamObjective;
    }
    
    /**
     * @return int
     */
    public function getTotalTimeCrowdControlDealt()
    {
        return $this->totalTimeCrowdControlDealt;
    }
    
    /**
     * @return int
     */
    public function getLongestTimeSpentLiving()
    {
        return $this->longestTimeSpentLiving;
    }
    
    /**
     * @return int
     */
    public function getWardsKilled()
    {
        return $this->wardsKilled;
    }
    
    /**
     * @return bool
     */
    public function isFirstTowerAssist()
    {
        return $this->firstTowerAssist;
    }
    
    /**
     * @return bool
     */
    public function isFirstTowerKill()
    {
        return $this->firstTowerKill;
    }
    
    /**
     * @return int
     */
    public function getItem2()
    {
        return $this->item2;
    }
    
    /**
     * @return int
     */
    public function getItem3()
    {
        return $this->item3;
    }
    
    /**
     * @return int
     */
    public function getItem0()
    {
        return $this->item0;
    }
    
    /**
     * @return bool
     */
    public function isFirstBloodAssist()
    {
        return $this->firstBloodAssist;
    }
    
    /**
     * @return double
     */
    public function getVisionScore()
    {
        return $this->visionScore;
    }
    
    /**
     * @return int
     */
    public function getWardsPlaced()
    {
        return $this->wardsPlaced;
    }
    
    /**
     * @return int
     */
    public function getItem4()
    {
        return $this->item4;
    }
    
    /**
     * @return int
     */
    public function getItem5()
    {
        return $this->item5;
    }
    
    /**
     * @return int
     */
    public function getItem6()
    {
        return $this->item6;
    }
    
    /**
     * @return int
     */
    public function getTurretKills()
    {
        return $this->turretKills;
    }
    
    /**
     * @return int
     */
    public function getTripleKills()
    {
        return $this->tripleKills;
    }
    
    /**
     * @return double
     */
    public function getDamageSelfMitigated()
    {
        return $this->damageSelfMitigated;
    }
    
    /**
     * @return int
     */
    public function getChampLevel()
    {
        return $this->champLevel;
    }
    
    /**
     * @return int
     */
    public function getNodeNeutralizeAssist()
    {
        return $this->nodeNeutralizeAssist;
    }
    
    /**
     * @return bool
     */
    public function isFirstInhibitorKill()
    {
        return $this->firstInhibitorKill;
    }
    
    /**
     * @return int
     */
    public function getGoldEarned()
    {
        return $this->goldEarned;
    }
    
    /**
     * @return double
     */
    public function getMagicalDamageTaken()
    {
        return $this->magicalDamageTaken;
    }
    
    /**
     * @return int
     */
    public function getKills()
    {
        return $this->kills;
    }
    
    /**
     * @return int
     */
    public function getDoubleKills()
    {
        return $this->doubleKills;
    }
    
    /**
     * @return int
     */
    public function getNodeCaptureAssist()
    {
        return $this->nodeCaptureAssist;
    }
    
    /**
     * @return double
     */
    public function getTrueDamageTaken()
    {
        return $this->trueDamageTaken;
    }
    
    /**
     * @return int
     */
    public function getNodeNeutralize()
    {
        return $this->nodeNeutralize;
    }
    
    /**
     * @return bool
     */
    public function isFirstInhibitorAssist()
    {
        return $this->firstInhibitorAssist;
    }
    
    /**
     * @return int
     */
    public function getAssists()
    {
        return $this->assists;
    }
    
    /**
     * @return int
     */
    public function getUnrealKills()
    {
        return $this->unrealKills;
    }
    
    /**
     * @return int
     */
    public function getNeutralMinionsKilled()
    {
        return $this->neutralMinionsKilled;
    }
    
    /**
     * @return int
     */
    public function getObjectivePlayerScore()
    {
        return $this->objectivePlayerScore;
    }
    
    /**
     * @return int
     */
    public function getCombatPlayerScore()
    {
        return $this->combatPlayerScore;
    }
    
    /**
     * @return double
     */
    public function getDamageDealtToTurrets()
    {
        return $this->damageDealtToTurrets;
    }
    
    /**
     * @return int
     */
    public function getAltarsNeutralized()
    {
        return $this->altarsNeutralized;
    }
    
    /**
     * @return double
     */
    public function getPhysicalDamageDealtToChampions()
    {
        return $this->physicalDamageDealtToChampions;
    }
    
    /**
     * @return int
     */
    public function getGoldSpent()
    {
        return $this->goldSpent;
    }
    
    /**
     * @return double
     */
    public function getTrueDamageDealt()
    {
        return $this->trueDamageDealt;
    }
    
    /**
     * @return double
     */
    public function getTrueDamageDealtToChampions()
    {
        return $this->trueDamageDealtToChampions;
    }
    
    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
    
    /**
     * @return int
     */
    public function getPentaKills()
    {
        return $this->pentaKills;
    }
    
    /**
     * @return double
     */
    public function getTotalHeal()
    {
        return $this->totalHeal;
    }
    
    /**
     * @return int
     */
    public function getTotalMinionsKilled()
    {
        return $this->totalMinionsKilled;
    }
    
    /**
     * @return bool
     */
    public function isFirstBloodKill()
    {
        return $this->firstBloodKill;
    }
    
    /**
     * @return int
     */
    public function getNodeCapture()
    {
        return $this->nodeCapture;
    }
    
    /**
     * @return int
     */
    public function getLargestMultiKill()
    {
        return $this->largestMultiKill;
    }
    
    /**
     * @return int
     */
    public function getSightWardsBoughtInGame()
    {
        return $this->sightWardsBoughtInGame;
    }
    
    /**
     * @return double
     */
    public function getTotalDamageDealtToChampions()
    {
        return $this->totalDamageDealtToChampions;
    }
    
    /**
     * @return int
     */
    public function getTotalUnitsHealed()
    {
        return $this->totalUnitsHealed;
    }
    
    /**
     * @return int
     */
    public function getInhibitorKills()
    {
        return $this->inhibitorKills;
    }
    
    /**
     * @return int
     */
    public function getTotalScoreRank()
    {
        return $this->totalScoreRank;
    }
    
    /**
     * @return double
     */
    public function getTotalDamageTaken()
    {
        return $this->totalDamageTaken;
    }
    
    /**
     * @return int
     */
    public function getKillingSprees()
    {
        return $this->killingSprees;
    }
    
    /**
     * @return double
     */
    public function getTimeCCingOthers()
    {
        return $this->timeCCingOthers;
    }
    
    /**
     * @return double
     */
    public function getPhysicalDamageTaken()
    {
        return $this->physicalDamageTaken;
    }
    
    /**
     * @param double $physicalDamageDealt
     *
     * @return $this
     */
    public function setPhysicalDamageDealt($physicalDamageDealt)
    {
        $this->physicalDamageDealt = $physicalDamageDealt;
    
        return $this;
    }
    
    /**
     * @param int $neutralMinionsKilledTeamJungle
     *
     * @return $this
     */
    public function setNeutralMinionsKilledTeamJungle($neutralMinionsKilledTeamJungle)
    {
        $this->neutralMinionsKilledTeamJungle = $neutralMinionsKilledTeamJungle;
    
        return $this;
    }
    
    /**
     * @param double $magicDamageDealt
     *
     * @return $this
     */
    public function setMagicDamageDealt($magicDamageDealt)
    {
        $this->magicDamageDealt = $magicDamageDealt;
    
        return $this;
    }
    
    /**
     * @param int $totalPlayerScore
     *
     * @return $this
     */
    public function setTotalPlayerScore($totalPlayerScore)
    {
        $this->totalPlayerScore = $totalPlayerScore;
    
        return $this;
    }
    
    /**
     * @param int $deaths
     *
     * @return $this
     */
    public function setDeaths($deaths)
    {
        $this->deaths = $deaths;
    
        return $this;
    }
    
    /**
     * @param bool $win
     *
     * @return $this
     */
    public function setWin($win)
    {
        $this->win = $win;
    
        return $this;
    }
    
    /**
     * @param int $neutralMinionsKilledEnemyJungle
     *
     * @return $this
     */
    public function setNeutralMinionsKilledEnemyJungle($neutralMinionsKilledEnemyJungle)
    {
        $this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;
    
        return $this;
    }
    
    /**
     * @param int $altarsCaptured
     *
     * @return $this
     */
    public function setAltarsCaptured($altarsCaptured)
    {
        $this->altarsCaptured = $altarsCaptured;
    
        return $this;
    }
    
    /**
     * @param int $largestCriticalStrike
     *
     * @return $this
     */
    public function setLargestCriticalStrike($largestCriticalStrike)
    {
        $this->largestCriticalStrike = $largestCriticalStrike;
    
        return $this;
    }
    
    /**
     * @param double $totalDamageDealt
     *
     * @return $this
     */
    public function setTotalDamageDealt($totalDamageDealt)
    {
        $this->totalDamageDealt = $totalDamageDealt;
    
        return $this;
    }
    
    /**
     * @param double $magicDamageDealtToChampions
     *
     * @return $this
     */
    public function setMagicDamageDealtToChampions($magicDamageDealtToChampions)
    {
        $this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
    
        return $this;
    }
    
    /**
     * @param int $visionWardsBoughtInGame
     *
     * @return $this
     */
    public function setVisionWardsBoughtInGame($visionWardsBoughtInGame)
    {
        $this->visionWardsBoughtInGame = $visionWardsBoughtInGame;
    
        return $this;
    }
    
    /**
     * @param double $damageDealtToObjectives
     *
     * @return $this
     */
    public function setDamageDealtToObjectives($damageDealtToObjectives)
    {
        $this->damageDealtToObjectives = $damageDealtToObjectives;
    
        return $this;
    }
    
    /**
     * @param int $largestKillingSpree
     *
     * @return $this
     */
    public function setLargestKillingSpree($largestKillingSpree)
    {
        $this->largestKillingSpree = $largestKillingSpree;
    
        return $this;
    }
    
    /**
     * @param int $item1
     *
     * @return $this
     */
    public function setItem1($item1)
    {
        $this->item1 = $item1;
    
        return $this;
    }
    
    /**
     * @param int $quadraKills
     *
     * @return $this
     */
    public function setQuadraKills($quadraKills)
    {
        $this->quadraKills = $quadraKills;
    
        return $this;
    }
    
    /**
     * @param int $teamObjective
     *
     * @return $this
     */
    public function setTeamObjective($teamObjective)
    {
        $this->teamObjective = $teamObjective;
    
        return $this;
    }
    
    /**
     * @param int $totalTimeCrowdControlDealt
     *
     * @return $this
     */
    public function setTotalTimeCrowdControlDealt($totalTimeCrowdControlDealt)
    {
        $this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;
    
        return $this;
    }
    
    /**
     * @param int $longestTimeSpentLiving
     *
     * @return $this
     */
    public function setLongestTimeSpentLiving($longestTimeSpentLiving)
    {
        $this->longestTimeSpentLiving = $longestTimeSpentLiving;
    
        return $this;
    }
    
    /**
     * @param int $wardsKilled
     *
     * @return $this
     */
    public function setWardsKilled($wardsKilled)
    {
        $this->wardsKilled = $wardsKilled;
    
        return $this;
    }
    
    /**
     * @param bool $firstTowerAssist
     *
     * @return $this
     */
    public function setFirstTowerAssist($firstTowerAssist)
    {
        $this->firstTowerAssist = $firstTowerAssist;
    
        return $this;
    }
    
    /**
     * @param bool $firstTowerKill
     *
     * @return $this
     */
    public function setFirstTowerKill($firstTowerKill)
    {
        $this->firstTowerKill = $firstTowerKill;
    
        return $this;
    }
    
    /**
     * @param int $item2
     *
     * @return $this
     */
    public function setItem2($item2)
    {
        $this->item2 = $item2;
    
        return $this;
    }
    
    /**
     * @param int $item3
     *
     * @return $this
     */
    public function setItem3($item3)
    {
        $this->item3 = $item3;
    
        return $this;
    }
    
    /**
     * @param int $item0
     *
     * @return $this
     */
    public function setItem0($item0)
    {
        $this->item0 = $item0;
    
        return $this;
    }
    
    /**
     * @param bool $firstBloodAssist
     *
     * @return $this
     */
    public function setFirstBloodAssist($firstBloodAssist)
    {
        $this->firstBloodAssist = $firstBloodAssist;
    
        return $this;
    }
    
    /**
     * @param double $visionScore
     *
     * @return $this
     */
    public function setVisionScore($visionScore)
    {
        $this->visionScore = $visionScore;
    
        return $this;
    }
    
    /**
     * @param int $wardsPlaced
     *
     * @return $this
     */
    public function setWardsPlaced($wardsPlaced)
    {
        $this->wardsPlaced = $wardsPlaced;
    
        return $this;
    }
    
    /**
     * @param int $item4
     *
     * @return $this
     */
    public function setItem4($item4)
    {
        $this->item4 = $item4;
    
        return $this;
    }
    
    /**
     * @param int $item5
     *
     * @return $this
     */
    public function setItem5($item5)
    {
        $this->item5 = $item5;
    
        return $this;
    }
    
    /**
     * @param int $item6
     *
     * @return $this
     */
    public function setItem6($item6)
    {
        $this->item6 = $item6;
    
        return $this;
    }
    
    /**
     * @param int $turretKills
     *
     * @return $this
     */
    public function setTurretKills($turretKills)
    {
        $this->turretKills = $turretKills;
    
        return $this;
    }
    
    /**
     * @param int $tripleKills
     *
     * @return $this
     */
    public function setTripleKills($tripleKills)
    {
        $this->tripleKills = $tripleKills;
    
        return $this;
    }
    
    /**
     * @param double $damageSelfMitigated
     *
     * @return $this
     */
    public function setDamageSelfMitigated($damageSelfMitigated)
    {
        $this->damageSelfMitigated = $damageSelfMitigated;
    
        return $this;
    }
    
    /**
     * @param int $champLevel
     *
     * @return $this
     */
    public function setChampLevel($champLevel)
    {
        $this->champLevel = $champLevel;
    
        return $this;
    }
    
    /**
     * @param int $nodeNeutralizeAssist
     *
     * @return $this
     */
    public function setNodeNeutralizeAssist($nodeNeutralizeAssist)
    {
        $this->nodeNeutralizeAssist = $nodeNeutralizeAssist;
    
        return $this;
    }
    
    /**
     * @param bool $firstInhibitorKill
     *
     * @return $this
     */
    public function setFirstInhibitorKill($firstInhibitorKill)
    {
        $this->firstInhibitorKill = $firstInhibitorKill;
    
        return $this;
    }
    
    /**
     * @param int $goldEarned
     *
     * @return $this
     */
    public function setGoldEarned($goldEarned)
    {
        $this->goldEarned = $goldEarned;
    
        return $this;
    }
    
    /**
     * @param double $magicalDamageTaken
     *
     * @return $this
     */
    public function setMagicalDamageTaken($magicalDamageTaken)
    {
        $this->magicalDamageTaken = $magicalDamageTaken;
    
        return $this;
    }
    
    /**
     * @param int $kills
     *
     * @return $this
     */
    public function setKills($kills)
    {
        $this->kills = $kills;
    
        return $this;
    }
    
    /**
     * @param int $doubleKills
     *
     * @return $this
     */
    public function setDoubleKills($doubleKills)
    {
        $this->doubleKills = $doubleKills;
    
        return $this;
    }
    
    /**
     * @param int $nodeCaptureAssist
     *
     * @return $this
     */
    public function setNodeCaptureAssist($nodeCaptureAssist)
    {
        $this->nodeCaptureAssist = $nodeCaptureAssist;
    
        return $this;
    }
    
    /**
     * @param double $trueDamageTaken
     *
     * @return $this
     */
    public function setTrueDamageTaken($trueDamageTaken)
    {
        $this->trueDamageTaken = $trueDamageTaken;
    
        return $this;
    }
    
    /**
     * @param int $nodeNeutralize
     *
     * @return $this
     */
    public function setNodeNeutralize($nodeNeutralize)
    {
        $this->nodeNeutralize = $nodeNeutralize;
    
        return $this;
    }
    
    /**
     * @param bool $firstInhibitorAssist
     *
     * @return $this
     */
    public function setFirstInhibitorAssist($firstInhibitorAssist)
    {
        $this->firstInhibitorAssist = $firstInhibitorAssist;
    
        return $this;
    }
    
    /**
     * @param int $assists
     *
     * @return $this
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;
    
        return $this;
    }
    
    /**
     * @param int $unrealKills
     *
     * @return $this
     */
    public function setUnrealKills($unrealKills)
    {
        $this->unrealKills = $unrealKills;
    
        return $this;
    }
    
    /**
     * @param int $neutralMinionsKilled
     *
     * @return $this
     */
    public function setNeutralMinionsKilled($neutralMinionsKilled)
    {
        $this->neutralMinionsKilled = $neutralMinionsKilled;
    
        return $this;
    }
    
    /**
     * @param int $objectivePlayerScore
     *
     * @return $this
     */
    public function setObjectivePlayerScore($objectivePlayerScore)
    {
        $this->objectivePlayerScore = $objectivePlayerScore;
    
        return $this;
    }
    
    /**
     * @param int $combatPlayerScore
     *
     * @return $this
     */
    public function setCombatPlayerScore($combatPlayerScore)
    {
        $this->combatPlayerScore = $combatPlayerScore;
    
        return $this;
    }
    
    /**
     * @param double $damageDealtToTurrets
     *
     * @return $this
     */
    public function setDamageDealtToTurrets($damageDealtToTurrets)
    {
        $this->damageDealtToTurrets = $damageDealtToTurrets;
    
        return $this;
    }
    
    /**
     * @param int $altarsNeutralized
     *
     * @return $this
     */
    public function setAltarsNeutralized($altarsNeutralized)
    {
        $this->altarsNeutralized = $altarsNeutralized;
    
        return $this;
    }
    
    /**
     * @param double $physicalDamageDealtToChampions
     *
     * @return $this
     */
    public function setPhysicalDamageDealtToChampions($physicalDamageDealtToChampions)
    {
        $this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
    
        return $this;
    }
    
    /**
     * @param int $goldSpent
     *
     * @return $this
     */
    public function setGoldSpent($goldSpent)
    {
        $this->goldSpent = $goldSpent;
    
        return $this;
    }
    
    /**
     * @param double $trueDamageDealt
     *
     * @return $this
     */
    public function setTrueDamageDealt($trueDamageDealt)
    {
        $this->trueDamageDealt = $trueDamageDealt;
    
        return $this;
    }
    
    /**
     * @param double $trueDamageDealtToChampions
     *
     * @return $this
     */
    public function setTrueDamageDealtToChampions($trueDamageDealtToChampions)
    {
        $this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
    
        return $this;
    }
    
    /**
     * @param int $participantId
     *
     * @return $this
     */
    public function setParticipantId($participantId)
    {
        $this->participantId = $participantId;
    
        return $this;
    }
    
    /**
     * @param int $pentaKills
     *
     * @return $this
     */
    public function setPentaKills($pentaKills)
    {
        $this->pentaKills = $pentaKills;
    
        return $this;
    }
    
    /**
     * @param double $totalHeal
     *
     * @return $this
     */
    public function setTotalHeal($totalHeal)
    {
        $this->totalHeal = $totalHeal;
    
        return $this;
    }
    
    /**
     * @param int $totalMinionsKilled
     *
     * @return $this
     */
    public function setTotalMinionsKilled($totalMinionsKilled)
    {
        $this->totalMinionsKilled = $totalMinionsKilled;
    
        return $this;
    }
    
    /**
     * @param bool $firstBloodKill
     *
     * @return $this
     */
    public function setFirstBloodKill($firstBloodKill)
    {
        $this->firstBloodKill = $firstBloodKill;
    
        return $this;
    }
    
    /**
     * @param int $nodeCapture
     *
     * @return $this
     */
    public function setNodeCapture($nodeCapture)
    {
        $this->nodeCapture = $nodeCapture;
    
        return $this;
    }
    
    /**
     * @param int $largestMultiKill
     *
     * @return $this
     */
    public function setLargestMultiKill($largestMultiKill)
    {
        $this->largestMultiKill = $largestMultiKill;
    
        return $this;
    }
    
    /**
     * @param int $sightWardsBoughtInGame
     *
     * @return $this
     */
    public function setSightWardsBoughtInGame($sightWardsBoughtInGame)
    {
        $this->sightWardsBoughtInGame = $sightWardsBoughtInGame;
    
        return $this;
    }
    
    /**
     * @param double $totalDamageDealtToChampions
     *
     * @return $this
     */
    public function setTotalDamageDealtToChampions($totalDamageDealtToChampions)
    {
        $this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
    
        return $this;
    }
    
    /**
     * @param int $totalUnitsHealed
     *
     * @return $this
     */
    public function setTotalUnitsHealed($totalUnitsHealed)
    {
        $this->totalUnitsHealed = $totalUnitsHealed;
    
        return $this;
    }
    
    /**
     * @param int $inhibitorKills
     *
     * @return $this
     */
    public function setInhibitorKills($inhibitorKills)
    {
        $this->inhibitorKills = $inhibitorKills;
    
        return $this;
    }
    
    /**
     * @param int $totalScoreRank
     *
     * @return $this
     */
    public function setTotalScoreRank($totalScoreRank)
    {
        $this->totalScoreRank = $totalScoreRank;
    
        return $this;
    }
    
    /**
     * @param double $totalDamageTaken
     *
     * @return $this
     */
    public function setTotalDamageTaken($totalDamageTaken)
    {
        $this->totalDamageTaken = $totalDamageTaken;
    
        return $this;
    }
    
    /**
     * @param int $killingSprees
     *
     * @return $this
     */
    public function setKillingSprees($killingSprees)
    {
        $this->killingSprees = $killingSprees;
    
        return $this;
    }
    
    /**
     * @param double $timeCCingOthers
     *
     * @return $this
     */
    public function setTimeCCingOthers($timeCCingOthers)
    {
        $this->timeCCingOthers = $timeCCingOthers;
    
        return $this;
    }
    
    /**
     * @param double $physicalDamageTaken
     *
     * @return $this
     */
    public function setPhysicalDamageTaken($physicalDamageTaken)
    {
        $this->physicalDamageTaken = $physicalDamageTaken;
    
        return $this;
    }
    
}
