<?php

use PHPUnit\Framework\TestCase;
use Unity\Support\Str;

class StrTest extends TestCase
{
    protected $str;

    public function setUp()
    {
        parent::setUp();

        $this->str = new Str();
    }

    public function testContains()
    {
        $this->assertEquals(true, $this->str->contains('@', '@'));
        $this->assertEquals(false, $this->str->contains('$', '@'));
    }

    public function testStartsWith()
    {
        $this->assertEquals(true, $this->str->startsWith('@', '@'));
        $this->assertEquals(true, $this->str->startsWith('@', '@_'));
        $this->assertEquals(false, $this->str->startsWith('@', '_@'));
    }

    public function testEndsWith()
    {
        $this->assertEquals(true, $this->str->endsWith('@', '@'));
        $this->assertEquals(true, $this->str->endsWith('@', '_@'));
        $this->assertEquals(false, $this->str->endsWith('@', '@_'));
    }
}
