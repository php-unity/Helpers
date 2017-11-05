<?php

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function testIsWhiteSpaceOrNull()
    {
        $this->assertTrue(isWhiteSpaceOrNull(''));
        $this->assertTrue(isWhiteSpaceOrNull(' '));
        $this->assertTrue(isWhiteSpaceOrNull('  '));
        $this->assertTrue(isWhiteSpaceOrNull(null));
        $this->assertFalse(isWhiteSpaceOrNull(0));
        $this->assertFalse(isWhiteSpaceOrNull('!'));
    }
}
