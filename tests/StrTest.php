<?php

use PHPUnit\Framework\TestCase;
use Unity\Support\Str;

class StrTest extends TestCase
{
    public function testContains()
    {
        $this->assertEquals(true, Str::Contains('@', '@'));
        $this->assertEquals(false, Str::Contains('$', '@'));
    }

    public function testStartsWith()
    {
        $this->assertEquals(true, Str::startsWith('@', '@'));
        $this->assertEquals(true, Str::startsWith('@', '@_'));
        $this->assertEquals(false, Str::startsWith('@', '_@'));
    }

    public function testEndsWith()
    {
        $this->assertEquals(true, Str::endsWith('@', '@'));
        $this->assertEquals(true, Str::endsWith('@', '_@'));
        $this->assertEquals(false, Str::endsWith('@', '@_'));
    }
}
