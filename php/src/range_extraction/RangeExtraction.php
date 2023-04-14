<?php
namespace App\range_extraction;

final class RangeExtraction
{
    public static function extract(array $list): string
    {
        sort($list);
        $result = [];
        $range = [];
        for ($i=0; $i<count($list); $i++) {
            if (isset($list[$i-1]) && $list[$i] - 1 !== $list[$i-1]) {
                if (count($range) > 2) {
                    $result[] = $range[0] . '-' . $range[count($range)];
                }
                continue;
            }
            $range[] = $list[$i];
            if (count($range) > 2) {
                $result[] = $range[0] . '-' . $range[count($range)];
            } else {
                $result = array_merge($result, $range);
                $range = [];
            }
        }
        return implode(",", $result);
    }
}