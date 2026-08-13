<?php

function fatorial(int $num1)
{
    $s = 1;
    for ($i = 1; $i <= $num1; $i++) {
        $s = $s * $i;
    }
    return $s;
};


for($i = 5; $i <= 12; $i++ ){

echo fatorial($i) . "<br>";



}

