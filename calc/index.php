<?php

//require_once 'classes/calculator.php';
//require_once 'classes/operatorInterface.php';
//require_once 'classes/adder.php';
//require_once 'classes/subtractor.php';
//require_once 'classes/multiplier.php';
//require_once 'classes/divider.php';
require_once 'init.php';

$calc = new Calculator();

$calc->setOperation(new Adder);
$calc->calculate(50, 50); //100

$calc->setOperation(new Subtractor);
$calc->calculate(30); //70

$calc->setOperation(new Multiplier);
$calc->calculate(3); //210

$calc->setOperation(new Divider);
$calc->calculate(2); //105

echo $calc->getResult();