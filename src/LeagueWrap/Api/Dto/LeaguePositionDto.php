<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category League
 */
class LeaguePositionDto extends BaseDto {
    /** @var string */
    protected $rank;
    
    /** @var Enum\QueueType::CUSTOM|Enum\QueueType::NORMAL_3x3|Enum\QueueType::NORMAL_5x5_BLIND|Enum\QueueType::NORMAL_5x5_DRAFT|Enum\QueueType::RANKED_SOLO_5x5|Enum\QueueType::RANKED_PREMADE_5x5|Enum\QueueType::RANKED_PREMADE_3x3|Enum\QueueType::RANKED_FLEX_TT|Enum\QueueType::RANKED_TEAM_3x3|Enum\QueueType::RANKED_TEAM_5x5|Enum\QueueType::ODIN_5x5_BLIND|Enum\QueueType::ODIN_5x5_DRAFT|Enum\QueueType::BOT_5x5|Enum\QueueType::BOT_ODIN_5x5|Enum\QueueType::BOT_5x5_INTRO|Enum\QueueType::BOT_5x5_BEGINNER|Enum\QueueType::BOT_5x5_INTERMEDIATE|Enum\QueueType::BOT_TT_3x3|Enum\QueueType::GROUP_FINDER_5x5|Enum\QueueType::ARAM_5x5|Enum\QueueType::ONEFORALL_5x5|Enum\QueueType::FIRSTBLOOD_1x1|Enum\QueueType::FIRSTBLOOD_2x2|Enum\QueueType::SR_6x6|Enum\QueueType::URF_5x5|Enum\QueueType::ONEFORALL_MIRRORMODE_5x5|Enum\QueueType::BOT_URF_5x5|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK1|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK2|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK5|Enum\QueueType::ASCENSION_5x5|Enum\QueueType::HEXAKILL|Enum\QueueType::BILGEWATER_ARAM_5x5|Enum\QueueType::KING_PORO_5x5|Enum\QueueType::COUNTER_PICK|Enum\QueueType::BILGEWATER_5x5|Enum\QueueType::SIEGE|Enum\QueueType::DEFINITELY_NOT_DOMINION_5x5|Enum\QueueType::ARURF_5X5|Enum\QueueType::ARSR_5x5|Enum\QueueType::TEAM_BUILDER_DRAFT_UNRANKED_5x5|Enum\QueueType::TEAM_BUILDER_DRAFT_RANKED_5x5|Enum\QueueType::TEAM_BUILDER_RANKED_SOLO|Enum\QueueType::TB_BLIND_SUMMONERS_RIFT_5x5|Enum\QueueType::RANKED_FLEX_SR|Enum\QueueType::ASSASSINATE_5x5|Enum\QueueType::DARKSTAR_3x3 */
    protected $queueType;
    
    /** @var bool */
    protected $hotStreak;
    
    /** @var MiniSeriesDto */
    protected $miniSeries;
    
    /** @var int */
    protected $wins;
    
    /** @var bool */
    protected $veteran;
    
    /** @var int */
    protected $losses;
    
    /** @var string */
    protected $playerOrTeamId;
    
    /** @var string */
    protected $leagueName;
    
    /** @var string */
    protected $playerOrTeamName;
    
    /** @var bool */
    protected $inactive;
    
    /** @var bool */
    protected $freshBlood;
    
    /** @var string */
    protected $tier;
    
    /** @var int */
    protected $leaguePoints;
    
    /**
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }
    
    /**
     * @return Enum\QueueType::CUSTOM|Enum\QueueType::NORMAL_3x3|Enum\QueueType::NORMAL_5x5_BLIND|Enum\QueueType::NORMAL_5x5_DRAFT|Enum\QueueType::RANKED_SOLO_5x5|Enum\QueueType::RANKED_PREMADE_5x5|Enum\QueueType::RANKED_PREMADE_3x3|Enum\QueueType::RANKED_FLEX_TT|Enum\QueueType::RANKED_TEAM_3x3|Enum\QueueType::RANKED_TEAM_5x5|Enum\QueueType::ODIN_5x5_BLIND|Enum\QueueType::ODIN_5x5_DRAFT|Enum\QueueType::BOT_5x5|Enum\QueueType::BOT_ODIN_5x5|Enum\QueueType::BOT_5x5_INTRO|Enum\QueueType::BOT_5x5_BEGINNER|Enum\QueueType::BOT_5x5_INTERMEDIATE|Enum\QueueType::BOT_TT_3x3|Enum\QueueType::GROUP_FINDER_5x5|Enum\QueueType::ARAM_5x5|Enum\QueueType::ONEFORALL_5x5|Enum\QueueType::FIRSTBLOOD_1x1|Enum\QueueType::FIRSTBLOOD_2x2|Enum\QueueType::SR_6x6|Enum\QueueType::URF_5x5|Enum\QueueType::ONEFORALL_MIRRORMODE_5x5|Enum\QueueType::BOT_URF_5x5|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK1|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK2|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK5|Enum\QueueType::ASCENSION_5x5|Enum\QueueType::HEXAKILL|Enum\QueueType::BILGEWATER_ARAM_5x5|Enum\QueueType::KING_PORO_5x5|Enum\QueueType::COUNTER_PICK|Enum\QueueType::BILGEWATER_5x5|Enum\QueueType::SIEGE|Enum\QueueType::DEFINITELY_NOT_DOMINION_5x5|Enum\QueueType::ARURF_5X5|Enum\QueueType::ARSR_5x5|Enum\QueueType::TEAM_BUILDER_DRAFT_UNRANKED_5x5|Enum\QueueType::TEAM_BUILDER_DRAFT_RANKED_5x5|Enum\QueueType::TEAM_BUILDER_RANKED_SOLO|Enum\QueueType::TB_BLIND_SUMMONERS_RIFT_5x5|Enum\QueueType::RANKED_FLEX_SR|Enum\QueueType::ASSASSINATE_5x5|Enum\QueueType::DARKSTAR_3x3
     */
    public function getQueueType()
    {
        return $this->queueType;
    }
    
    /**
     * @return bool
     */
    public function isHotStreak()
    {
        return $this->hotStreak;
    }
    
    /**
     * @return MiniSeriesDto
     */
    public function getMiniSeries()
    {
        return $this->miniSeries;
    }
    
    /**
     * @return int
     */
    public function getWins()
    {
        return $this->wins;
    }
    
    /**
     * @return bool
     */
    public function isVeteran()
    {
        return $this->veteran;
    }
    
    /**
     * @return int
     */
    public function getLosses()
    {
        return $this->losses;
    }
    
    /**
     * @return string
     */
    public function getPlayerOrTeamId()
    {
        return $this->playerOrTeamId;
    }
    
    /**
     * @return string
     */
    public function getLeagueName()
    {
        return $this->leagueName;
    }
    
    /**
     * @return string
     */
    public function getPlayerOrTeamName()
    {
        return $this->playerOrTeamName;
    }
    
    /**
     * @return bool
     */
    public function isInactive()
    {
        return $this->inactive;
    }
    
    /**
     * @return bool
     */
    public function isFreshBlood()
    {
        return $this->freshBlood;
    }
    
    /**
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }
    
    /**
     * @return int
     */
    public function getLeaguePoints()
    {
        return $this->leaguePoints;
    }
    
    /**
     * @param string $rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }
    
    /**
     * @param Enum\QueueType::CUSTOM|Enum\QueueType::NORMAL_3x3|Enum\QueueType::NORMAL_5x5_BLIND|Enum\QueueType::NORMAL_5x5_DRAFT|Enum\QueueType::RANKED_SOLO_5x5|Enum\QueueType::RANKED_PREMADE_5x5|Enum\QueueType::RANKED_PREMADE_3x3|Enum\QueueType::RANKED_FLEX_TT|Enum\QueueType::RANKED_TEAM_3x3|Enum\QueueType::RANKED_TEAM_5x5|Enum\QueueType::ODIN_5x5_BLIND|Enum\QueueType::ODIN_5x5_DRAFT|Enum\QueueType::BOT_5x5|Enum\QueueType::BOT_ODIN_5x5|Enum\QueueType::BOT_5x5_INTRO|Enum\QueueType::BOT_5x5_BEGINNER|Enum\QueueType::BOT_5x5_INTERMEDIATE|Enum\QueueType::BOT_TT_3x3|Enum\QueueType::GROUP_FINDER_5x5|Enum\QueueType::ARAM_5x5|Enum\QueueType::ONEFORALL_5x5|Enum\QueueType::FIRSTBLOOD_1x1|Enum\QueueType::FIRSTBLOOD_2x2|Enum\QueueType::SR_6x6|Enum\QueueType::URF_5x5|Enum\QueueType::ONEFORALL_MIRRORMODE_5x5|Enum\QueueType::BOT_URF_5x5|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK1|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK2|Enum\QueueType::NIGHTMARE_BOT_5x5_RANK5|Enum\QueueType::ASCENSION_5x5|Enum\QueueType::HEXAKILL|Enum\QueueType::BILGEWATER_ARAM_5x5|Enum\QueueType::KING_PORO_5x5|Enum\QueueType::COUNTER_PICK|Enum\QueueType::BILGEWATER_5x5|Enum\QueueType::SIEGE|Enum\QueueType::DEFINITELY_NOT_DOMINION_5x5|Enum\QueueType::ARURF_5X5|Enum\QueueType::ARSR_5x5|Enum\QueueType::TEAM_BUILDER_DRAFT_UNRANKED_5x5|Enum\QueueType::TEAM_BUILDER_DRAFT_RANKED_5x5|Enum\QueueType::TEAM_BUILDER_RANKED_SOLO|Enum\QueueType::TB_BLIND_SUMMONERS_RIFT_5x5|Enum\QueueType::RANKED_FLEX_SR|Enum\QueueType::ASSASSINATE_5x5|Enum\QueueType::DARKSTAR_3x3 $queueType
     *
     * @return $this
     */
    public function setQueueType($queueType)
    {
        $this->queueType = $queueType;
    
        return $this;
    }
    
    /**
     * @param bool $hotStreak
     *
     * @return $this
     */
    public function setHotStreak($hotStreak)
    {
        $this->hotStreak = $hotStreak;
    
        return $this;
    }
    
    /**
     * @param MiniSeriesDto $miniSeries
     *
     * @return $this
     */
    public function setMiniSeries($miniSeries)
    {
        $this->miniSeries = new MiniSeriesDto($miniSeries);
    
        return $this;
    }
    
    /**
     * @param int $wins
     *
     * @return $this
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    
        return $this;
    }
    
    /**
     * @param bool $veteran
     *
     * @return $this
     */
    public function setVeteran($veteran)
    {
        $this->veteran = $veteran;
    
        return $this;
    }
    
    /**
     * @param int $losses
     *
     * @return $this
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    
        return $this;
    }
    
    /**
     * @param string $playerOrTeamId
     *
     * @return $this
     */
    public function setPlayerOrTeamId($playerOrTeamId)
    {
        $this->playerOrTeamId = $playerOrTeamId;
    
        return $this;
    }
    
    /**
     * @param string $leagueName
     *
     * @return $this
     */
    public function setLeagueName($leagueName)
    {
        $this->leagueName = $leagueName;
    
        return $this;
    }
    
    /**
     * @param string $playerOrTeamName
     *
     * @return $this
     */
    public function setPlayerOrTeamName($playerOrTeamName)
    {
        $this->playerOrTeamName = $playerOrTeamName;
    
        return $this;
    }
    
    /**
     * @param bool $inactive
     *
     * @return $this
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;
    
        return $this;
    }
    
    /**
     * @param bool $freshBlood
     *
     * @return $this
     */
    public function setFreshBlood($freshBlood)
    {
        $this->freshBlood = $freshBlood;
    
        return $this;
    }
    
    /**
     * @param string $tier
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    
        return $this;
    }
    
    /**
     * @param int $leaguePoints
     *
     * @return $this
     */
    public function setLeaguePoints($leaguePoints)
    {
        $this->leaguePoints = $leaguePoints;
    
        return $this;
    }
    
}
