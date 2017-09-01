<?php
namespace LeagueWrap;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\RedirectPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\UriFactoryDiscovery;
use Psr\Cache\CacheItemPoolInterface;
use LeagueWrap\Http\ClientBuilder;
use LeagueWrap\RateLimit\AppRateLimiter;
use LeagueWrap\RateLimit\MethodRateLimiter;
use LeagueWrap\Cache\CacheItemPoolFactory;
use LeagueWrap\RateLimit\VoidRateLimiter;

/**
 * Class LeagueWrap
 *
 * @method Api\Match match()
 * @method Api\League league()
 * @method Api\Summoner summoner()
 */
class Client
{
    public static $name = 'LeagueWrap';
    
    public static $version = 'v1.0.0';
    
    const AUTH_HEADER = 'X-Riot-Token';

    /**
     * API key.
     *
     * @var string
     */
    protected $key;

    /**
     * Selected region. See the Region class for more details.
     *
     * @var Region
     */
    protected $region;

    /**
     * @var AppRateLimiter
     */
    protected $appRateLimiter;

    /**
     * @var MethodRateLimiter
     */
    protected $methodRateLimiter;

    /**
     * @var CacheItemPoolInterface
     */
    protected $cache;

    /**
     * Api constructor.
     *
     * @param string|null $apiKey
     * @param Region|string|null $region
     * @param ClientBuilder|null $builder
     */
    public function __construct($apiKey = null, $region = null, ClientBuilder $builder = null)
    {
        $this->httpClientBuilder = $builder ?: new ClientBuilder();
        
        $region = $region ?: 'euw';
        $this->region = is_string($region) ? Region::create($region) : $region;
        
        $this->httpClientBuilder
            ->addPlugin(new RedirectPlugin())
            ->addPlugin(new AddHostPlugin(UriFactoryDiscovery::find()->createUri($this->region->getDomain())))
            ->addPlugin(new HeaderDefaultsPlugin([
                'User-Agent' => self::$name.' '.self::$version,
                self::AUTH_HEADER => $apiKey,
            ]));
        
        $this->appRateLimiter = new VoidRateLimiter();
        $this->methodRateLimiter = new VoidRateLimiter();
    }

    public function api($name)
    {
        switch ($name) {
            case 'match':
                $api = new Api\Match($this, $this->region);
                break;
            case 'league':
                $api = new Api\League($this, $this->region);
                break;
            case 'summoner':
                $api = new Api\Summoner($this, $this->region);
                break;
            case 'spectator':
                $api = new Api\Spectator($this, $this->region);
                break;
            case 'status':
                $api = new Api\Status($this, $this->region);
                break;
            case 'championMastery':
            case 'champion_mastery':
                $api = new Api\ChampionMastery($this, $this->region);
                break;
            case 'platform':
            case 'champion':
            case 'champions':
            case 'mastery':
            case 'masteries':
            case 'rune':
            case 'runes':
                $api = new Api\Platform($this, $this->region);
                break;
            case 'staticData':
            case 'static_data':
                $api = new Api\StaticData($this, $this->region);
                break;
            default:
                throw new \InvalidArgumentException("Could not create '{$name}' API instance.");
        }
        
        return $api;
    }

    public function setApiKey($apiKey)
    {
        $this->httpClientBuilder->addHeader(self::AUTH_HEADER, $apiKey);
    }

    public function addCache(CacheItemPoolInterface $pool, array $options = [])
    {
        $this->cache = $pool;
        $this->getHttpClientBuilder()->addCache($pool, $options);
        
        return $this;
    }
    
    public function removeCache()
    {
        $this->getHttpClientBuilder()->removeCache();
        $this->cache = null;
        
        return $this;
    }

    public function getCache()
    {
        return $this->cache;
    }

    public function setAppLimits(array $limits, CacheItemPoolInterface $pool = null)
    {
        $this->appRateLimiter = new AppRateLimiter($pool ?: CacheItemPoolFactory::make('fs'), $limits);

        return $this;
    }

    public function getAppRateLimiter()
    {
        return $this->appRateLimiter;
    }

    public function setMethodLimits(array $limits, CacheItemPoolInterface $pool = null)
    {
        $this->methodRateLimiter = new MethodRateLimiter($pool ?: CacheItemPoolFactory::make('fs'), $limits);

        return $this;
    }

    public function getMethodRateLimiter()
    {
        return $this->methodRateLimiter;
    }

    /**
     * @return PluginClient
     */
    public function getHttpClient()
    {
        return $this->getHttpClientBuilder()->getHttpClient();
    }
    /**
     * @return ClientBuilder
     */
    protected function getHttpClientBuilder()
    {
        return $this->httpClientBuilder;
    }

    public function __call($name, $args)
    {
        return $this->api($name);
    }
}
