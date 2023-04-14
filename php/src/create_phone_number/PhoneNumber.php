<?php
namespace App\create_phone_number;

final class PhoneNumber
{
    public static function createPhoneNumber(array $numbersArray)
    {
        return sprintf('(%s%s%s) %s%s%s-%s%s%s%s', ...$numbersArray);
    }
}