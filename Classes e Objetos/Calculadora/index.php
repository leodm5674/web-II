<?php

include_once("Calculadora.php");

$calculadora = new Calculadora();

$calculadora->setNum1(10);
$calculadora->setNum2(23);

echo $calculadora->getNum1() . " + " .
    $calculadora->getNum2() . " = " .
    $calculadora->somar();
