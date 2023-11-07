<?php
namespace App\combinations;
final class Combination
{
    private int $price;
    public function __construct(
        public readonly Transport $inbound,
        public readonly Transport $outbound,

    )
    {
        $this->price = $outbound->price + $inbound->price;
    }

    public function price(): int
    {
        return $this->price;
    }
}