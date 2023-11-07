<?php
namespace App\combinations;
final class CombinationAlgorithms
{
    public static function forceCombination(array $inbounds, array $outbounds, int $maxResults): array {
        $combinations = [];
        foreach ($inbounds as $inbound) {
            foreach ($outbounds as $outbound) {
                $combination = new Combination($inbound, $outbound);
                $combinations[] = $combination;
            }
        }
        usort($combinations, fn($a, $b) => $a->price() - $b->price());

        return array_slice($combinations, 0, $maxResults);
    }
}