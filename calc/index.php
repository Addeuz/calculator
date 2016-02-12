<?php

require_once 'classes/calculator.php';
require_once 'classes/operatorInterface.php';
require_once 'classes/adder.php';
require_once 'classes/subtractor.php';
require_once 'classes/multiplier.php';
require_once 'classes/divider.php';

$calc = new Calculator();

$calc->setOperation(new Adder);
$calc->calculate(10, 50); //60

$calc->setOperation(new Subtractor);
$calc->calculate(30); //30

$calc->setOperation(new Multiplier);
$calc->calculate(5); //150

$calc->setOperation(new Divider);
$calc->calculate(2); //75

echo $calc->getResult();