<?php

use Unity\Support\Arr;

use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{
    function testRSearch()
    {
        $array = [
            'database' => [
                'users' => [
                    'eleandro' => [
                        'password' => 'e200'
                    ]
                ]
            ]
        ];

        $keys = ['database', 'users', 'eleandro', 'password'];

        $this->assertEquals('e200', Arr::rSearch($array, $keys));
    }

    function testMerge()
    {
        $array1 = [1, 2];
        $array2 = [3, 4];

        $mergedArray = Arr::merge($array1, $array2);

        $this->assertCount(4, $mergedArray);
    }
}