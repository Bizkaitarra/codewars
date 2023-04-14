<?php
namespace App\sums_of_parts;
final class PartsSums
{
    public static function partsSums($ls): array {
        if (count($ls) === 0) {
            return [0];
        }
        $totalElementSum = 0;
        foreach ($ls as $element) {
            $totalElementSum+= $element;
        }

        $resultArray = [$totalElementSum];
        foreach ($ls as $element) {
            $totalElementSum -= $element;
            $resultArray[] = $totalElementSum;
        }
        return $resultArray;
    }
}