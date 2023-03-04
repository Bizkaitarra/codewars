<?php
function series_sum(int $position): string
{
    $total = 0;
    for ($currentPosition = 1; $currentPosition <= $position; $currentPosition++) {
        $total+= 1 / getDivisor($currentPosition);
    }
    return number_format((float)$total, 2, '.', '');
}

function getDivisor(int $position): int {
    return 1+ (3*($position-1));
}