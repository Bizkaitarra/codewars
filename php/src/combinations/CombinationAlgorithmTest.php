<?php

namespace App\combinations;

use PHPUnit\Framework\TestCase;

final class CombinationAlgorithmTest extends TestCase
{
    public function testForce() {
        $result = CombinationAlgorithms::forceCombination(
            [new Transport(1)],
            [new Transport(2)],
            1
        );

        $this->assertCount(1, $result);
        $this->assertInstanceOf(Combination::class, $result[0]);
        $this->assertEquals($result[0]->price(), 3);
    }


    public function testForceMultiple() {
        $result = CombinationAlgorithms::forceCombination(
            [new Transport(1), new Transport(3), new Transport(5)],
            [new Transport(1), new Transport(1), new Transport(2), new Transport(7)],
            4
        );
        $this->assertCount(4, $result);
        $this->assertEquals($result[0]->price(), 2);
        $this->assertEquals($result[1]->price(), 2);
        $this->assertEquals($result[2]->price(), 3);
        $this->assertEquals($result[3]->price(), 4);
    }

}