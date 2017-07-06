<?php

namespace LeagueWrap\Api\Dto;

use LeagueWrap\Api\BaseDto;
use LeagueWrap\Enum;

/**
 * No description provided.
 *
 * @category LolStatus
 */
class Message extends BaseDto {
    /** @var string */
    protected $severity;
    
    /** @var string */
    protected $author;
    
    /** @var string */
    protected $created_at;
    
    /** @var Translation[] */
    protected $translations;
    
    /** @var string */
    protected $updated_at;
    
    /** @var string */
    protected $content;
    
    /** @var string */
    protected $id;
    
    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }
    
    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }
    
    /**
     * @return string
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }
    
    /**
     * @return Translation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }
    
    /**
     * @return string
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
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
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param string $severity
     *
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    
        return $this;
    }
    
    /**
     * @param string $author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }
    
    /**
     * @param string $created_at
     *
     * @return $this
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    
        return $this;
    }
    
    /**
     * @param Translation[] $translations
     *
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->translations = $translations;
    
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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }
    
}
