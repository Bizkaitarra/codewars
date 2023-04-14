<?php

namespace App\range_extraction;

use PHPUnit\Framework\TestCase;

final class RangeExtractionTest extends TestCase
{
    /**
     * @test
     */
    public function example(): void
    {
        self::assertSame(
            '-6,-3-1,3-5,7-11,14,15,17-20',
            RangeExtraction::extract([-6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20])
        );
    }
}
