<?php

namespace Calculator;

use Calculator\Operations\Exponent;
use Calculator\Operations\Multiply;
use Calculator\Operations\Divide;

class Calculator
{
    function exponent($num, $exponent): int
    {
        $exponentObj = new Exponent($num, $exponent);
        return $exponentObj->compute();
    }
    function Multiply($num1, $num2): int
    {
        $MultiplyObj = new Multiply($num1, $num2);
        return $MultiplyObj ->multiply();
    }
    function Divide($num1, $num2): int
    {
        $DivideObj = new Divide($num1, $num2);
        return $DivideObj ->divide();
    }


    // Write your functions below

}
