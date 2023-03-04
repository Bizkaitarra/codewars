<?php
namespace App\is_number_prime;

use PHPUnit\Framework\TestCase;

final class IsPrimeTest extends TestCase {
    public function testExamples() {
        $this->assertFalse(is_prime(0));
        $this->assertFalse(is_prime(1));
        $this->assertTrue(is_prime(2));
        $this->assertTrue(is_prime(5), 'Your function should work for the example provided in the Kata Description');
    }
}