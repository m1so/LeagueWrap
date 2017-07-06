<?php

namespace LeagueWrap;

class Region
{
    protected $selected;

    const PLATFORM_IDS = [
        'na'   => 'NA1',
        'euw'  => 'EUW1',
        'br'   => 'BR1',
        'lan'  => 'LA1',
        'las'  => 'LA2',
        'oce'  => 'OC1',
        'eune' => 'EUN1',
        'tr'   => 'TR1',
        'ru'   => 'RU',
        'kr'   => 'KR',
        'jp'   => 'JP1',
    ];

    protected $apiDomain = 'https://{platform}.api.riotgames.com';

    /**
     * Region constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $name = strtolower($name);

        if (! array_key_exists($name, self::PLATFORM_IDS)) {
            throw new \LogicException('Unsupported region.');
        }

        $this->selected = $name;
    }

    public static function create($region)
    {
        return $region instanceof self ? $region : new self($region);
    }

    public function getDomain()
    {
        return str_replace('{platform}', self::PLATFORM_IDS[$this->selected], $this->apiDomain);
    }

    public function getName()
    {
        return $this->selected;
    }

    public function getPlatformId()
    {
        return self::PLATFORM_IDS[$this->selected];
    }
}
