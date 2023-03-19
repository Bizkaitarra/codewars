<?php
namespace App\tortoise_race;

use PHPUnit\Framework\TestCase;

final class TortoiseRacingCases extends TestCase
{
    public function testBasics() {
        $this->assertEquals([0, 32, 18], TortoiseRacing::race(720, 850, 70));
        $this->assertEquals([3, 21, 49], TortoiseRacing::race(80, 91, 37));
        $this->assertEquals([2, 0, 0], TortoiseRacing::race(80, 100, 40));
    }
}