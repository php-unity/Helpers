<?php

use Unity\Support\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    function testContains()
    {
        $this->assertEquals(true, Str::Contains('@', '@'));
    }

    function testNotContain()
    {
        $this->assertEquals(false, Str::Contains('$', '@'));
    }

    function testStartsWith()
    {
        $this->assertEquals(true, Str::startsWith('@', '@'));
        $this->assertEquals(true, Str::startsWith('@', '@_'));
    }

    function testNotStartWith()
    {
        $this->assertEquals(false, Str::startsWith('@', '_@'));
    }

    function testEndsWith()
    {
        $this->assertEquals(true, Str::endsWIth('@', '@'));
        $this->assertEquals(true, Str::endsWIth('@', '_@'));
    }

    function testNotEndsWith()
    {
        $this->assertEquals(false, Str::endsWIth('@', '@_'));
    }
}