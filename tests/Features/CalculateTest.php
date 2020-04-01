<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Calculate;

class CalculateTest extends TestCase
{
    private $calculator;

    public function testAdd()
    {
        $this->calculator = new Calculate();
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }

}