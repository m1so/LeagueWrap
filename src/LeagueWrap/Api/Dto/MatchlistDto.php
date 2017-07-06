<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class MatchlistDto extends BaseDto {
    /** @var MatchReferenceDto[] */
    protected $matches;
    
    /** @var int */
    protected $totalGames;
    
    /** @var int */
    protected $startIndex;
    
    /** @var int */
    protected $endIndex;
    
    /**
     * @return MatchReferenceDto[]
     */
    public function getMatches()
    {
        return $this->matches;
    }
    
    /**
     * @return int
     */
    public function getTotalGames()
    {
        return $this->totalGames;
    }
    
    /**
     * @return int
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }
    
    /**
     * @return int
     */
    public function getEndIndex()
    {
        return $this->endIndex;
    }
    
    /**
     * @param MatchReferenceDto[] $matches
     *
     * @return $this
     */
    public function setMatches($matches)
    {
        foreach ($matches as $key => $dtoData) {
            $this->matches[$key] = new MatchReferenceDto($dtoData);
        }
    
        return $this;
    }
    
    /**
     * @param int $totalGames
     *
     * @return $this
     */
    public function setTotalGames($totalGames)
    {
        $this->totalGames = $totalGames;
    
        return $this;
    }
    
    /**
     * @param int $startIndex
     *
     * @return $this
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    
        return $this;
    }
    
    /**
     * @param int $endIndex
     *
     * @return $this
     */
    public function setEndIndex($endIndex)
    {
        $this->endIndex = $endIndex;
    
        return $this;
    }
    
}
