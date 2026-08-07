<?php


$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$r = 0;
$soma = 0;
for ($i = 0; $i < count($array); $i++) {
    $soma = $soma + $array[$i];
}
$r = $soma / 10;

echo $r;
