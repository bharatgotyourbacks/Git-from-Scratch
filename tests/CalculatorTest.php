<?php

class CalculatorTest extends \PHPUnit\Framework\Testcase
{
    public function testMultiply()
    {
        $calculator = new \Calculator\Calculator;
        $result = $calculator->Multiply(8, 2);
        $this->assertEquals(16, $result);
        $result1 = $calculator->Multiply(10, 12);
        $this->assertEquals(120, $result1);
    }

    public function testDivide()
    {
        $calculator = new \Calculator\Calculator;
        $result = $calculator->Divide(8, 2);
        $this->assertEquals(4, $result);
        $result2 = $calculator->Divide(100, 25);
        $this->assertEquals(4, $result2);
    }

    public function testExponent()
    {
        $calculator = new \Calculator\Calculator;
        $result = $calculator->Exponent(3, 4);
        $this->assertEquals(81, $result);
    }
}
