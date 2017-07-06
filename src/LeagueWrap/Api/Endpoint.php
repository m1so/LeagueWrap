<?php

namespace LeagueWrap\Api;

use LeagueWrap\Region;

interface Endpoint
{
    /**
     * Endpoint's name.
     *
     * @return string
     */
    public function getName();
    
    /**
     * Formatted uri fragment.
     * 
     * @return string
     */
    public function getUrl();

    /**
     * Region associated with this endpoint.
     * 
     * @return Region
     */
    public function getRegion();

    /**
     * Rate limit as an associative array.
     * 
     * @return array
     */
    public function getLimit();

    /**
     * Some endpoints are not rate-limited.
     * 
     * @return bool
     */
    public function countsTowardsLimit();

    /**
     * In seconds.
     * 
     * @return int
     */
    public function getCacheLifeTime();
}
