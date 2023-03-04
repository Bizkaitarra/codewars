<?php


use PHPUnit\Framework\TestCase;

class MovingZeroToTheEndTest extends TestCase
{
    public function testExamples() {
        $this->assertSame([1,2,1,1,3,1,0,0,0,0], moveZeros([1,2,0,1,0,1,0,3,0,1]));
        $this->assertSame([9,9,1,2,1,1,3,1,9,9,0,0,0,0,0,0,0,0,0,0], moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9]));
        $this->assertSame(["a","b","c","d",1,1,3,1,9,9,0,0,0,0,0,0,0,0,0,0], moveZeros(["a",0,0,"b","c","d",0,1,0,1,0,3,0,1,9,0,0,0,0,9]));
        $this->assertSame(["a","b",null,"c","d",1,false,1,3,[],1,9,9,0,0,0,0,0,0,0,0,0,0], moveZeros(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]));
        $this->assertSame([1,null,2,false,1,0,0], moveZeros([0,1,null,2,false,1,0]));
        $this->assertSame(["a","b"], moveZeros(["a","b"]));
        $this->assertSame(["a"], moveZeros(["a"]));
        $this->assertSame([0,0], moveZeros([0,0]));
        $this->assertSame([0], moveZeros([0]));
        $this->assertSame([false], moveZeros([false]));
        $this->assertSame([], moveZeros([]));
    }
}