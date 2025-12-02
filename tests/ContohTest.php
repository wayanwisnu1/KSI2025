<?php

use PHPUnit\Framework\TestCase;

class ContohTest extends TestCase
{
    // Tes 1: Memastikan penjumlahan benar (1+1=2)
    public function testPenjumlahan()
    {
        $hasil = 1 + 1;
        $this->assertEquals(2, $hasil);
    }

    // Tes 2: Memastikan kata 'Jenkins' ada di string
    public function testString()
    {
        $kata = "Halo Jenkins";
        $this->assertStringContainsString("Jenkins", $kata);
    }
}
