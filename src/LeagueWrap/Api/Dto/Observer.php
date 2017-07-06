<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category Spectator
 */
class Observer extends BaseDto {
    /** @var string */
    protected $encryptionKey;
    
    /**
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->encryptionKey;
    }
    
    /**
     * @param string $encryptionKey
     *
     * @return $this
     */
    public function setEncryptionKey($encryptionKey)
    {
        $this->encryptionKey = $encryptionKey;
    
        return $this;
    }
    
}
