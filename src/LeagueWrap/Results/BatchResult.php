<?php

namespace LeagueWrap\Results;

use GuzzleHttp\Promise\Promise;
use LeagueWrap\Traits\ArrayAccessible;

class BatchResult implements \ArrayAccess, \Countable, \IteratorAggregate
{
    use ArrayAccessible;
    
    /**
     * @var array
     */
    protected $data;

    /**
     * @var Result[]
     */
    protected $responses;
    
    public function __construct($data, $responses)
    {
        $this->data = $data;
        $this->responses = $responses;
    }

    public static function fromSettledPromises(array $results)
    {
        $fulfilled = array_filter($results, function ($inspection) {
            return $inspection['state'] === Promise::FULFILLED;
        });
        
        // TODO: Add access to rejected responses
        $rejected = array_filter($results, function ($inspection) {
            return $inspection['state'] === Promise::REJECTED;
        });
        
        /** @var Result[] $responses */
        $responses = array_map(function ($inspection) {
            return Result::fromPsr7($inspection['value']);
        }, $fulfilled);
        
        // TODO: Use the headers to check and sync rate limits
        $chronologicalResponses = $responses;
        usort($chronologicalResponses, function (Result $a, Result $b) {
            $aLimit = $a->getAppRateLimit();
            $bLimit = $b->getAppRateLimit();
            
            if ($aLimit === null || $bLimit === null) {
                return 0;
            }
            
            return (end($aLimit) < end($bLimit)) ? -1 : 1;
        });

        /** @var array $data */
        $data = array_map(function (Result $response) {
            return \GuzzleHttp\json_decode((string) $response->getResponse()->getBody(), true);
        }, $responses);
        
        return new self($data, $responses);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return Result[]
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        // Print request / response timings and rate limit headers
        return array_reduce($this->responses, function ($carry, Result $response) {
            $psrResponse = $response->getResponse();

            return $carry.PHP_EOL.
                "Request:       {$psrResponse->getHeaderLine('X-Request')}".PHP_EOL.
                "Endpoint:      {$psrResponse->getHeaderLine('X-Endpoint')} ({$psrResponse->getHeaderLine('X-Region')})".PHP_EOL.
                //"Started:       {$psrResponse->getHeaderLine('X-Start')} -> {$psrResponse->getHeaderLine('X-Duration')}s".PHP_EOL.
                //"Ended:         {$psrResponse->getHeaderLine('X-End')}".PHP_EOL.
                "App limits:    {$psrResponse->getHeaderLine('X-App-Rate-Limit-Count')} ({$psrResponse->getHeaderLine('X-App-Rate-Limit')})".PHP_EOL.
                "Method limits: {$psrResponse->getHeaderLine('X-Method-Rate-Limit-Count')} ({$psrResponse->getHeaderLine('X-Method-Rate-Limit')})".
                PHP_EOL;
        }, '');
    }
    
    /**
     * Determine if the given offset exists.
     *
     * @param string $offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return $this->exists($this->data, $offset);
    }

    /**
     * Get the value at the given offset.
     *
     * @param string $offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->get($this->data, $offset);
    }

    /**
     * Set the value at the given offset.
     *
     * @param string $offset
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->set($this->data, $offset, $value);
    }

    /**
     * Remove the value at the given offset.
     *
     * @param string $offset
     *
     * @return void
     */
    public function offsetUnset($offset) {
        $this->unset_($this->data, $offset);
    }

    /**
     * Retrieve an external iterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * Count elements of an object
     */
    public function count()
    {
        return count($this->data);
    }
}
