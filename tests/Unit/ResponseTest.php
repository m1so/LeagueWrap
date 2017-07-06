<?php

namespace LeagueWrap\Tests\Unit;

use LeagueWrap\Results\BatchResult;
use LeagueWrap\Results\Result;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    /** @test */
    public function response_content_is_accessible_through_dot_notation()
    {
        $response = new Result(['deeply' => ['nested' => ['data' => 'value']]], [], 200);
        
        $this->assertEquals('value', $response['deeply.nested.data']);
    }

    /** @test */
    public function response_is_countable()
    {
        $response = new Result([
            ['data' => []],
            ['data' => []],
        ]);
        
        $this->assertEquals(2, count($response));
    }

    /** @test */
    public function batch_response_is_iterable()
    {
        $response = new BatchResult([
            [
                'data' => [
                    'key' => 'value1',
                ]
            ],
            [
                'data' => [
                    'key' => 'value2'
                ]
            ],
        ], []);

        foreach ($response as $item) {
            foreach ($item as $key => $value) {
                $this->assertEquals('data', $key);
                $this->assertStringStartsWith('value', $value['key']);
            }
        }
    }
}
