<?php

namespace LeagueWrap\Results;

use LeagueWrap\Traits\ArrayAccessible;
use Psr\Http\Message\ResponseInterface;

class Result implements \ArrayAccess, \Countable, \IteratorAggregate
{
    use ArrayAccessible;
    
    const APP_RATE_LIMIT_HEADER = 'X-App-Rate-Limit-Count';
    
    const METHOD_RATE_LIMIT_HEADER = 'X-Method-Rate-Limit-Count';

    /**
     * @var array
     */
    protected $data;
    
    /**
     * @var ResponseInterface|null
     */
    protected $response;

    /**
     * Result constructor.
     *
     * @param $content
     * @param $response
     */
    public function __construct($content, $response = null)
    {
        $this->data = $content;
        $this->response = $response;
    }


    public static function fromPsr7(ResponseInterface $response)
    {
        return new self(
            \GuzzleHttp\json_decode((string) $response->getBody(), true),
            $response
        );
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string[][]
     */
    public function getHeaders()
    {
        return $this->response->getHeaders();
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->response->getStatusCode();
    }

    /**
     * @return ResponseInterface|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function getAppRateLimit()
    {
        return $this->getRateLimitValuesByHeader(self::APP_RATE_LIMIT_HEADER);
    }

    public function getMethodRateLimit()
    {
        return $this->getRateLimitValuesByHeader(self::METHOD_RATE_LIMIT_HEADER);
    }

    /**
     * Extract rate limits from given header.
     * Header value is in form "count:time_limit,count:another_time_limit".
     * Format returned is [ (int) time_limit => (int) count, ... ].
     * 
     * @param $headerName
     *
     * @return int[][]|null
     */
    protected function getRateLimitValuesByHeader($headerName)
    {
        $header = $this->getHeaders()[$headerName];
        
        return $header ? array_reduce(explode(',', $header[0]), function ($limits, $limitStr) {
            list($count, $time) = explode(':', $limitStr, 2);
            $limits[$time] = (int) $count;
            
            return $limits;
        }, []) : null;
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
