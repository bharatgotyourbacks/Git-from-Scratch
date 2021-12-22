<?php

namespace Calculator\Operations;

class Exponent
{
    private $num;
    private $exponent;

    public function __construct($num, $exponent)
    {
        $this->num = $num;
        $this->exponent = $exponent;
    }

    public function compute(){
        return pow($this->num, $this->exponent);
    }
}
