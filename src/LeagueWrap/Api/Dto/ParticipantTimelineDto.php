<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Match
 */
class ParticipantTimelineDto extends BaseDto {
    /** @var string */
    protected $lane;
    
    /** @var int */
    protected $participantId;
    
    /** @var double[] Map[string, double] */
    protected $csDiffPerMinDeltas;
    
    /** @var double[] Map[string, double] */
    protected $goldPerMinDeltas;
    
    /** @var double[] Map[string, double] */
    protected $xpDiffPerMinDeltas;
    
    /** @var double[] Map[string, double] */
    protected $creepsPerMinDeltas;
    
    /** @var double[] Map[string, double] */
    protected $xpPerMinDeltas;
    
    /** @var string */
    protected $role;
    
    /** @var double[] Map[string, double] */
    protected $damageTakenDiffPerMinDeltas;
    
    /** @var double[] Map[string, double] */
    protected $damageTakenPerMinDeltas;
    
    /**
     * @return string
     */
    public function getLane()
    {
        return $this->lane;
    }
    
    /**
     * @return int
     */
    public function getParticipantId()
    {
        return $this->participantId;
    }
    
    /**
     * @return double[]
     */
    public function getCsDiffPerMinDeltas()
    {
        return $this->csDiffPerMinDeltas;
    }
    
    /**
     * @return double[]
     */
    public function getGoldPerMinDeltas()
    {
        return $this->goldPerMinDeltas;
    }
    
    /**
     * @return double[]
     */
    public function getXpDiffPerMinDeltas()
    {
        return $this->xpDiffPerMinDeltas;
    }
    
    /**
     * @return double[]
     */
    public function getCreepsPerMinDeltas()
    {
        return $this->creepsPerMinDeltas;
    }
    
    /**
     * @return double[]
     */
    public function getXpPerMinDeltas()
    {
        return $this->xpPerMinDeltas;
    }
    
    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * @return double[]
     */
    public function getDamageTakenDiffPerMinDeltas()
    {
        return $this->damageTakenDiffPerMinDeltas;
    }
    
    /**
     * @return double[]
     */
    public function getDamageTakenPerMinDeltas()
    {
        return $this->damageTakenPerMinDeltas;
    }
    
    /**
     * @param string $lane
     *
     * @return $this
     */
    public function setLane($lane)
    {
        $this->lane = $lane;
    
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
     * @param double[] $csDiffPerMinDeltas Map[string, double]
     *
     * @return $this
     */
    public function setCsDiffPerMinDeltas($csDiffPerMinDeltas)
    {
        $this->csDiffPerMinDeltas = $csDiffPerMinDeltas;
    
        return $this;
    }
    
    /**
     * @param double[] $goldPerMinDeltas Map[string, double]
     *
     * @return $this
     */
    public function setGoldPerMinDeltas($goldPerMinDeltas)
    {
        $this->goldPerMinDeltas = $goldPerMinDeltas;
    
        return $this;
    }
    
    /**
     * @param double[] $xpDiffPerMinDeltas Map[string, double]
     *
     * @return $this
     */
    public function setXpDiffPerMinDeltas($xpDiffPerMinDeltas)
    {
        $this->xpDiffPerMinDeltas = $xpDiffPerMinDeltas;
    
        return $this;
    }
    
    /**
     * @param double[] $creepsPerMinDeltas Map[string, double]
     *
     * @return $this
     */
    public function setCreepsPerMinDeltas($creepsPerMinDeltas)
    {
        $this->creepsPerMinDeltas = $creepsPerMinDeltas;
    
        return $this;
    }
    
    /**
     * @param double[] $xpPerMinDeltas Map[string, double]
     *
     * @return $this
     */
    public function setXpPerMinDeltas($xpPerMinDeltas)
    {
        $this->xpPerMinDeltas = $xpPerMinDeltas;
    
        return $this;
    }
    
    /**
     * @param string $role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }
    
    /**
     * @param double[] $damageTakenDiffPerMinDeltas Map[string, double]
     *
     * @return $this
     */
    public function setDamageTakenDiffPerMinDeltas($damageTakenDiffPerMinDeltas)
    {
        $this->damageTakenDiffPerMinDeltas = $damageTakenDiffPerMinDeltas;
    
        return $this;
    }
    
    /**
     * @param double[] $damageTakenPerMinDeltas Map[string, double]
     *
     * @return $this
     */
    public function setDamageTakenPerMinDeltas($damageTakenPerMinDeltas)
    {
        $this->damageTakenPerMinDeltas = $damageTakenPerMinDeltas;
    
        return $this;
    }
    
}
