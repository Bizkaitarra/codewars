<?php
function moveZeros(array $items): array
{
    $nonZeroItems = array_filter($items, fn($item) => $item !== 0 && $item != '0.0');
    $zeroItems = array_filter($items, fn($item) => $item === 0 || $item == '0.0');
    return array_merge($nonZeroItems, array_fill(0, count($zeroItems), 0));
}


var_dump(moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]));
