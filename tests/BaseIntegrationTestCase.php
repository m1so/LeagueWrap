<?php

namespace LeagueWrap\Tests;

use GuzzleHttp\Exception\ServerException;
use LeagueWrap\Client;
use PHPUnit\Framework\TestCase;
use Throwable;

abstract class BaseIntegrationTestCase extends TestCase
{
    /**
     * @var Client
     */
    protected $api;

    /**
     * Override PHPUnit's set up method.
     */
    public function setUp()
    {
        if (empty(getenv('RIOT_API_KEY'))) {
            $this->markTestSkipped(
                'Cannot run integration tests without an API key.'.PHP_EOL.
                'Use `export RIOT_API_KEY=my-key` or create `.env.test` file with `RIOT_API_KEY=my-key` as content to set it.'
            );
        }

        $this->api = (new Client(getenv('RIOT_API_KEY'), 'euw'));
    }

    /**
     * Override PHPUnit's method for handling unsuccessful tests.
     * 
     * @param Throwable $t
     */
    protected function onNotSuccessfulTest(Throwable $t)
    {
        // In case 5xx mark the test as incomplete
        if ($t instanceof ServerException) {
            self::markTestIncomplete(
                'Skipping "'.
                self::getName().'"'.PHP_EOL.
                '  url:   '.
                "[{$t->getResponse()->getStatusCode()}] ".$t->getRequest()->getRequestTarget().PHP_EOL.
                '  data:  '.
                (string) $t->getResponse()->getBody()
            );
        }
        
        parent::onNotSuccessfulTest($t);
    }

    /**
     * Skip a test when Paratest or more than one tests are running.
     */
    protected function skipRateLimitedTest()
    {
        if ($this->getTestResultObject()->count() !== 1 && getenv('TEST_TOKEN') === false) {
            $this->markTestSkipped('Rate limit tests can be only ran one at a time.');
        }
    }
}
