# LeagueWrap
Simple yet powerful PHP wrapper for [Riot Games API](https://developer.riotgames.com/) (formerly [LeaguePHP/LeagueWrap](https://github.com/LeaguePHP/LeagueWrap) and [paquettg/leaguewrap](https://github.com/paquettg/leaguewrap)).

The library has been fully rewritten to support v3 of the League of Legends API and adapted to use modern PHP standards such as PSR-4, PSR-6 and PSR-7. Guzzle has been removed in favor of [PHP-HTTP](http://docs.php-http.org/en/latest/), while the caching and rate-limiting backends now fully support PSR-6 through [PHP Cache](http://www.php-cache.com/en/latest/).

Note that the HTTP client is pluggable and must be chosen when installing the library. For example using Guzzle along with LeagueWrap would look like:
```bash
composer require \
    php-http/guzzle6-adapter \
    php-http/message \
    guzzlehttp/psr7 \
    m1so/leaguewrap
```
See the [library users](http://docs.php-http.org/en/latest/httplug/users.html#details) section for more information.

- [Features](#features)
- [Example](#example)
- [Rate limiting and Caching](#rate-limiting-and-caching)
- [Extras](#extras)
  - [Additional headers](#additional-headers)
- [Gotchas](#gotchas)
  - [Batch request calls / caching](#batch-request-calls-caching)
- [Todo](#todo)

## Features

* Simple API design
  * leverages PHP's magic methods and provides phpdoc annotations
  * implements `ArrayAccess` and "dot notation" to quickly grab data
* Rate limiting supports app and method limits
* PSR-6 compatible caching with multiple backend adapters and framework integrations
* Batch calls - every method can accept an array of identifiers to generate multiple asynchronous requests

## Example

```php
use LeagueWrap\Client as RiotApi;

$api = new RiotApi('RGAPI-xxx', 'euw');

// The following calls produce the same results
$api->match()->getById($id);
$api->match()->byId($id);

// Support for batch calls (requires multiple async requests)
$api->match()->getById([$gameId, $anotherGameId]); // using array as an argument
$api->match()->byIds([$gameId, $anotherGameId]); // dedicated method on the Match API Class

// Simple data access
$myGame = $api->match()->byId($id);
$myGame['gameId'] === $id;
$myGame['teams.0.teamId'] === 100; // "dot" notation support for nested elements
```

## Rate limiting
Any PSR-6 compatible cache pool can be used for rate limiting backend. If no pool is supplied, the filesystem is used. For list of available pools see [php-cache docs](http://www.php-cache.com/en/latest/#cache-pool-implementations).

```php
// Redis backend with Predis client
// @see https://github.com/php-cache/predis-adapter
$client = new \Predis\Client('tcp:/127.0.0.1:6379');
$pool = new \Cache\Adapter\Predis\PredisCachePool($client);

$api->setAppLimits([
    '10' => 100, // 100 requests per 10 seconds
], $pool);

// When using Laravel
$store = \Illuminate\Support\Facades\Cache::store()->getStore();
// .... or by using the Cache Facade
$store = \Cache::store()->getStore();

$pool = new \Cache\Adapter\Illuminate\IlluminateCachePool($store);

$api->setLimits([
    '10' => 100, // 100 requests per 10 seconds
], $pool);

/*
 * Caching is very similar, infact the same pool can be shared with the rate-limiter.
 */
$api->addCache($pool);
$api->removeCache();
```

## Extras

### Additional headers
The underlying PSR response contains additional headers such as:
* `X-Region` - region string, can be used with `Region::create($value)`
* `X-Endpoint` - endpoint name, can be used with `BaseApi::$endpointDefinitions[$endpointName]`

## Gotchas

### Batch request calls / caching
Consider the following example:
```php
$api->addCache($cachePool)->match()->byIds([$id1, $id2, ..., $idN, $id1]);
```
it is possible that `N+1` requests will be made instead of `N` (where the second call with `$id1` would be cached) because Guzzle can start multiple requests "concurrently", therefore the second call would be fired before the first response could be received and cached.

This scenario is not that significant in most cases as requesting multiple same resources should be avoided in the application logic.

## Todo

* Finish writing annotations for phpdoc
* Custom cache TTL for individual endpoints
* Sync rate limits and usage from responses
* Clean up batch responses sorting
* Dto support?
* Should the filesystem cache be used by default or use void?

---
PHP LeagueWrap API isn't endorsed by LeagueWrap Games and doesn't reflect the views or opinions of LeagueWrap Games or anyone officially involved in producing or managing League of Legends. League of Legends and LeagueWrap Games are trademarks or registered trademarks of LeagueWrap Games, Inc. League of Legends © LeagueWrap Games, Inc.
