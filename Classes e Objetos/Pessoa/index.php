<?php


include_once("Pessoa.php");

$nometop = new Pessoa();

$nometop->setNome("Leandro");
$nometop->setSobrenome("Morais");

echo $nometop->getNome() . " + " .
    $nometop->getSobrenome() . " = " .
    $nometop->retornanome();
