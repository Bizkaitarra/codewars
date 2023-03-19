<?php

namespace App\roman_number_decoder;

final class RomanNumberDecoder {



    public static function decode ($roman) {

        $valueMap = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $number = 0;

        $romanLetters = str_split($roman);
        for ($i = 0; $i < count($romanLetters); $i++) {
            $currentInt = $valueMap[$romanLetters[$i]];
            if (isset($romanLetters[$i+1])) {
                $nextInt = $valueMap[$romanLetters[$i+1]];
                if ($currentInt < $nextInt) {
                    $number+= ($nextInt - $currentInt);
                    $i++;
                } else {
                    $number+=$currentInt;
                }
            } else {
                $number+=$currentInt;
            }
        }
        return $number;
    }
}
