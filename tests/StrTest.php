<?php

use Unity\Support\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    function testContains()
    {
        $this->assertEquals(true, Str::Contains('@', '@'));
        $this->assertEquals(false, Str::Contains('$', '@'));
    }

    function testStartsWith()
    {
        $this->assertEquals(true, Str::startsWith('@', '@'));
        $this->assertEquals(true, Str::startsWith('@', '@_'));
        $this->assertEquals(false, Str::startsWith('@', '_@'));
    }

    function testEndsWith()
    {
        $this->assertEquals(true, Str::endsWith('@', '@'));
        $this->assertEquals(true, Str::endsWith('@', '_@'));
        $this->assertEquals(false, Str::endsWith('@', '@_'));
    }
}