<?php

namespace LeagueWrap\Tests;

use LeagueWrap\Results\BatchResult;

trait IntegrationAssertionTrait
{
    /**
     * Helper method to test the correctness of batched results from a rate-limited endpoint.
     *
     * @param $result
     */
    protected function assertBatchResponse(BatchResult $result)
    {
        $previousLimit = 0;

        foreach ($result->getResponses() as $response) {
            $psrResponse = $response->getResponse();

            $this->assertTrue(
                $psrResponse->hasHeader('X-App-Rate-Limit-Count') && $psrResponse->hasHeader('X-Method-Rate-Limit-Count'),
                'Rate limit header(s) are missing.'
            );

            $this->assertNotNull($response->getAppRateLimit(), 'App rate-limit was not parsed correctly.');
            $this->assertNotNull($response->getMethodRateLimit(), 'Method rate-limit was not parsed correctly.');

            $appLimit = $response->getAppRateLimit();
            $currentLimit = reset($appLimit);
            $this->assertGreaterThan(
                $previousLimit, $currentLimit,
                'The responses were not sorted in the order that they were passed in to the batch call.'
            );
            $previousLimit = $currentLimit;
        }

        $this->assertInternalType('array', $result->getData()[0], 'One of the batched results does not conform to the expected class.');
    }
}
