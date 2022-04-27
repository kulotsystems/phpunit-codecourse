<?php

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssetsToTrue()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
    }
}