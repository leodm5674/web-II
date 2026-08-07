<?php

$v1 = array("cachorro", "gato", "leao", "elefante", "cavalo");
$v2 = array();

$matriz = array($v1, $v2);

foreach ($v1 as $i) {

    array_push($v2, $i);
}

foreach ($v2 as $p) {

    echo $p . "<br>";
}
