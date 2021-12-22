<?php

require_once("vendor/autoload.php");

use Calculator\Calculator;

$operation = $argv[1];

$calcObj = new Calculator();

unset($argv[0]);
unset($argv[1]);

print($calcObj->$operation(...$argv));
