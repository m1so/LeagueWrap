<?php

namespace LeagueWrap\Api;

use LeagueWrap\Region;

abstract class BaseEndpoint implements Endpoint
{
    /**
     * Url template
     *
     * @var string
     */
    protected $urlTemplate;

    /**
     * Computed url based on identifiers.
     * 
     * @var string
     */
    protected $url;

    /**
     * Identifiers to be replaced in the url template.
     *
     * @var array
     */
    protected $ids;

    /**
     * Associated region.
     * 
     * @var Region
     */
    protected $region;

    /**
     * Some endpoints are not rate-limited.
     * 
     * @var bool
     */
    protected $isRateLimited = true;

    /**
     * Method rate limits.
     * 
     * @var array
     */
    protected $rateLimit = [];

    /**
     * In seconds.
     * 
     * @var int
     */
    protected $cacheLifeTime = 120;

    /**
     * BaseEndpoint constructor.
     *
     * @param Region $region
     * @param array $ids
     */
    public function __construct(Region $region, array $ids = [])
    {
        $this->ids = $ids;
        $this->region = $region;
    }

    /**
     * Endpoint's name.
     *
     * @return string
     */
    public function getName()
    {
        // str_replace(['/', '{', '}'], ['_', '', ''], $this->urlTemplate)
        return $this->urlTemplate;
    }

    /**
     * Get url of this endpoint with formatted parameters.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->formatUrlWith($this->ids, $this->urlTemplate);
    }

    /**
     * Replaces all {templateLiterals} with values from the params array in given string.
     *
     * @param $ids
     * @param $urlTemplate
     *
     * @return string
     */
    protected function formatUrlWith($ids, $urlTemplate)
    {
        // Already computed
        if ($this->url) {
            return $this->url;
        }

        $url = $urlTemplate;
        
        foreach ($ids as $id) {
            $url = preg_replace('/{[^}]+}/', $id, $url, 1);
        }
        
        // Update once the replacement process is complete
        $this->url = $url;

        return $url;
    }

    /**
     * Rate limit as an associative array.
     *
     * @return array
     */
    public function getLimit()
    {
        return $this->rateLimit;
    }

    /**
     * {@inheritdoc}
     */
    public function countsTowardsLimit()
    {
        return $this->isRateLimited;
    }

    /**
     * {@inheritdoc}
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheLifeTime()
    {
        return $this->cacheLifeTime;
    }
}
