<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class ParticipantDto extends BaseDto {
    /** @var ParticipantStatsDto */
    protected $stats;
    
    /** @var int */
    protected $participantId;
    
    /** @var RuneDto[] */
    protected $runes;
    
    /** @var ParticipantTimelineDto */
    protected $timeline;
    
    /** @var int */
    protected $teamId;
    
    /** @var int */
    protected $spell2Id;
    
    /** @var MasteryDto[] */
    protected $masteries;
    
    /** @var string */
    protected $highestAchievedSeasonTier;
    
    /** @var int */
    protected $spell1Id;
    
    /** @var int */
    protected $championId;
    
    /**
     * @return ParticipantStatsDto
     */
    public function getStats()
    {
        return $this->stats;
    }
    
    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
    
    /**
     * @return RuneDto[]
     */
    public function getRunes()
    {
        return $this->runes;
    }
    
    /**
     * @return ParticipantTimelineDto
     */
    public function getTimeline()
    {
        return $this->timeline;
    }
    
    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
    
    /**
     * @return int
     */
    public function getSpell2Id()
    {
        return $this->spell2Id;
    }
    
    /**
     * @return MasteryDto[]
     */
    public function getMasteries()
    {
        return $this->masteries;
    }
    
    /**
     * @return string
     */
    public function getHighestAchievedSeasonTier()
    {
        return $this->highestAchievedSeasonTier;
    }
    
    /**
     * @return int
     */
    public function getSpell1Id()
    {
        return $this->spell1Id;
    }
    
    /**
     * @return int
     */
    public function getChampionId()
    {
        return $this->championId;
    }
    
    /**
     * @param ParticipantStatsDto $stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->stats = new ParticipantStatsDto($stats);
    
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
     * @param RuneDto[] $runes
     *
     * @return $this
     */
    public function setRunes($runes)
    {
        foreach ($runes as $key => $dtoData) {
            $this->runes[$key] = new RuneDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param ParticipantTimelineDto $timeline
     *
     * @return $this
     */
    public function setTimeline($timeline)
    {
        $this->timeline = new ParticipantTimelineDto($timeline);
    
        return $this;
    }
    
    /**
     * @param int $teamId
     *
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }
    
    /**
     * @param int $spell2Id
     *
     * @return $this
     */
    public function setSpell2Id($spell2Id)
    {
        $this->spell2Id = $spell2Id;
    
        return $this;
    }
    
    /**
     * @param MasteryDto[] $masteries
     *
     * @return $this
     */
    public function setMasteries($masteries)
    {
        foreach ($masteries as $key => $dtoData) {
            $this->masteries[$key] = new MasteryDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param string $highestAchievedSeasonTier
     *
     * @return $this
     */
    public function setHighestAchievedSeasonTier($highestAchievedSeasonTier)
    {
        $this->highestAchievedSeasonTier = $highestAchievedSeasonTier;
    
        return $this;
    }
    
    /**
     * @param int $spell1Id
     *
     * @return $this
     */
    public function setSpell1Id($spell1Id)
    {
        $this->spell1Id = $spell1Id;
    
        return $this;
    }
    
    /**
     * @param int $championId
     *
     * @return $this
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;
    
        return $this;
    }
    
}
