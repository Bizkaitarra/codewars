<?php

namespace App\pyramid_array;

use PHPUnit\Framework\TestCase;

final class PyramidArrayTest extends TestCase {
    public function testBasicTests() {
        $this->assertSame([], Pyramid::pyramid(0));
        $this->assertSame([[1]], Pyramid::pyramid(1));
        $this->assertSame([[1], [1, 1]], Pyramid::pyramid(2));
        $this->assertSame([[1], [1, 1], [1, 1, 1]], Pyramid::pyramid(3));
    }


}