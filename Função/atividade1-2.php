<?php

function area($raio)
{
    $area = 3.14 * $raio * $raio;
    return $area;
}

function circunferencia($raio)
{
    return 2 * 3.14 * $raio;

    return 0;
};
for ($i = 1; $i < 5; $i++) {
    echo "Área círculo raio " . $i . "m: " . area($i) . "m <br>";

    echo "Circufêrencia círculo raio " . $i . " m: " . circunferencia($i) . "m <br><br>";
}
