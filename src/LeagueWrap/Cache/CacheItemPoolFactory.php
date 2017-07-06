<?php

namespace LeagueWrap\Cache;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class CacheItemPoolFactory
{
    public static function make($poolName = '', $options = [])
    {
        switch ($poolName) {
            case 'fs':
            case 'filesystem':
                return static::createFilesystemPool($options);
                break;
            default:
                throw new \LogicException("Could not create cache pool for '{$poolName}'");
        }
    }

    protected static function createFilesystemPool($options = [])
    {
        return new FilesystemCachePool(
            new Filesystem(
                new Local(
                    isset($options['dir']) ? $options['dir'] : sys_get_temp_dir().'/'
                )
            )
        );
    }
}
