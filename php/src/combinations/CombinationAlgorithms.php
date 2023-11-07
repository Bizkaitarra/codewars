<?php
namespace App\combinations;
final class CombinationAlgorithms
{
    public static function forceCombination(array $inbounds, array $outbounds, int $maxResults): array {
        $combinations = [];
        foreach ($inbounds as $inbound) {
            foreach ($outbounds as $outbound) {
                $combination = new Combination($inbound, $outbound);
                $combinations[$combination->price()][] = $combination;
            }
        }
        ksort($combinations);
        $finalCombinations = [];
        foreach ($combinations as $combinationsInPrice) {
            foreach ($combinationsInPrice as $combination) {
                $finalCombinations[] = $combination;
            }
        }
        return array_splice($finalCombinations, 0, $maxResults);
    }
}