<?php

/*require _DIR_ . ("vendor/autoload.php");

use Calculator\Calculator;

$operation = $_GET['op'];
$params = explode(',',$_GET['params']);
$calcObj = new Calculator();
//$operation = $argv[1];

if(method_exists($calcObj,$operation)){
    print($calcObj->$operation(...$params));
}
else{
    print('Unsupported operation');
}*/

//unset($argv[0]);
//unset($argv[1]);

//print($calcObj->$operation(...$argv));


require_once("vendor/autoload.php");

use Calculator\Calculator;

$operation = $argv[1];

$calcObj = new Calculator();

unset($argv[0]);
unset($argv[1]);

print($calcObj->$operation(...$argv));
