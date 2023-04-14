<?php
namespace App\pyramid_array;

final class Pyramid
{
    public static function pyramid(int $n)
    {
        $result = [];
        $piramidLevel = [];
        for ($i=0;$i<$n;$i++) {
            $piramidLevel[] = 1;
            $result[] = $piramidLevel;
        }
        return $result;
    }

}