<?php
namespace App\create_phone_number;

use PHPUnit\Framework\TestCase;

final class PhoneNumberTestextends extends TestCase {
    public function testBasicTests() {
        $this->assertSame('(123) 456-7890', PhoneNumber::createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]));
        $this->assertSame('(111) 111-1111', PhoneNumber::createPhoneNumber([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]));
    }
}