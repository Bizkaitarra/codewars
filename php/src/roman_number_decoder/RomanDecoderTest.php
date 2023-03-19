<?php
namespace App\roman_number_decoder;

final class RomanDecoderTest extends \PHPUnit\Framework\TestCase
{
    public function testBasics() {
        $this->assertSame(1000, $this->solution("M"));
        $this->assertSame(50, $this->solution("L"));
        $this->assertSame(4, $this->solution("IV"));
    }

    public function testComplex() {
        $this->assertSame(2017, $this->solution("MMXVII"));
        $this->assertSame(1337, $this->solution("MCCCXXXVII"));
    }

    private function solution($romanNumber) {
        return RomanNumberDecoder::decode($romanNumber);
    }
}