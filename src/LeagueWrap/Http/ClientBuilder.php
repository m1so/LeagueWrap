<?php

namespace LeagueWrap\Http;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpAsyncClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\RequestFactory;
use Http\Message\StreamFactory;
use Psr\Cache\CacheItemPoolInterface;
use LeagueWrap\Cache\CachePlugin;
use LeagueWrap\Cache\KeyGenerator;

/**
 * ClientBuilder for PHP-HTTP client.
 * 
 * Inspired by https://github.com/KnpLabs/php-github-api/blob/master/lib/Github/HttpClient/Builder.php
 */
class ClientBuilder
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var PluginClient
     */
    private $client;
    
    /**
     * @var RequestFactory
     */
    private $requestFactory;
    
    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * @var bool
     */
    private $httpClientModified = true;

    /**
     * @var Plugin[]
     */
    private $plugins = [];
    
    /**
     * @var Plugin\CachePlugin
     */
    private $cachePlugin;
    
    /**
     * Http headers.
     *
     * @var array
     */
    private $headers = [];

    public function __construct(HttpClient $httpClient = null, RequestFactory $requestFactory = null, StreamFactory $streamFactory = null)
    {

        $this->httpClient = $httpClient ?: HttpClientDiscovery::find();
        $this->requestFactory = $requestFactory ?: MessageFactoryDiscovery::find();
        $this->streamFactory = $streamFactory ?: StreamFactoryDiscovery::find();
    }

    /**
     * @return PluginClient
     */
    public function getHttpClient()
    {
        if (!$this->httpClientModified) {
            return $this->client;
        }

        $this->httpClientModified = false;
        
        if ($this->cachePlugin) {
            $this->plugins[] = $this->cachePlugin;
        }

        return ($this->client = new PluginClient($this->httpClient, $this->plugins));
    }

    /**
     * Append a new plugin.
     *
     * @param Plugin $plugin
     *
     * @return $this
     */
    public function addPlugin(Plugin $plugin)
    {
        $this->plugins[] = $plugin;
        $this->httpClientModified = true;
        
        return $this;
    }

    /**
     * Remove a plugin by its fully qualified class name (FQCN).
     *
     * @param string $fqcn
     */
    public function removePlugin($fqcn)
    {
        foreach ($this->plugins as $idx => $plugin) {
            if ($plugin instanceof $fqcn) {
                unset($this->plugins[$idx]);
                $this->httpClientModified = true;
            }
        }
    }

    /**
     * @param string $header
     * @param string $headerValue
     */
    public function addHeader($header, $headerValue)
    {
        if (!isset($this->headers[$header])) {
            $this->headers[$header] = $headerValue;
        } else {
            $this->headers[$header] = array_merge((array)$this->headers[$header], array($headerValue));
        }
        $this->removePlugin(Plugin\HeaderAppendPlugin::class);
        $this->addPlugin(new Plugin\HeaderAppendPlugin($this->headers));
    }

    public function addCache(CacheItemPoolInterface $pool, array $options)
    {
        if (! isset($options['cache_key_generator'])) {
            $options['cache_key_generator'] = new KeyGenerator();
        }
        
        $this->cachePlugin = new CachePlugin($pool, $this->streamFactory, $options['cache_key_generator'], $options);
        
        $this->httpClientModified = true;
    }
    
    public function removeCache()
    {
        $this->cachePlugin = null;
        
        $this->httpClientModified = true;
    }
}
