<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_claculate_a_numbers(): void
    {
        $calc = calc(2,2);
        $this->assertEquals(5,$calc);
    }
}
