<?php

use PHPUnit\Framework\TestCase;
use Unity\Support\Arr;

class ArrTest extends TestCase
{
    public function testNestedGetHas()
    {
        $array = [
            'database' => [
                'users' => [
                    'eleandro' => [
                        'password' => 'e200',
                    ],
                ],
            ],
        ];

        $keys = ['database', 'users', 'eleandro', 'password'];

        $this->assertEquals('e200', Arr::nestedGet($keys, $array));
        $this->assertTrue(Arr::nestedHas($keys, $array));
    }

    public function testMerge()
    {
        $array1 = [1, 2];
        $array2 = [3, 4];

        $mergedArray = Arr::merge($array1, $array2);

        $this->assertCount(4, $mergedArray);
    }
}
