<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category LolStatus
 */
class Translation extends BaseDto {
    /** @var string */
    protected $locale;
    
    /** @var string */
    protected $content;
    
    /** @var string */
    protected $updated_at;
    
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
    
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * @return string
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }
    
    /**
     * @param string $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    
        return $this;
    }
    
    /**
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }
    
    /**
     * @param string $updated_at
     *
     * @return $this
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    
        return $this;
    }
    
}
