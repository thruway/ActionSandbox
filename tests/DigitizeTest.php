<?php

namespace ActionSandbox\Tests;

use ActionSandbox\Digitize;
use PHPUnit\Framework\TestCase;

class DigitizeTest extends TestCase
{
    /**
     * @covers \ActionSandbox\Digitize
     */
    public function testDigitizer() {
        $this->assertEquals(42, Digitize::digitize("4", "2"));
    }
}