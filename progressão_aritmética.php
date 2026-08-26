
<?php



if (!isset($_GET['inicio']) || $_GET['inicio'] == "") {
    echo "Faltou inicio" . "<br>";
}

if (!isset($_GET['razao']) || $_GET['razao'] == "") {
    echo "Faltou razao" . "<br>";
}

if (!isset($_GET['quantidade']) || $_GET['quantidade'] == "") {
    echo "Faltou quantidade" . "<br>";
}

if (isset($_GET['inicio']) && $_GET['inicio'] != "" && isset($_GET['razao']) &&  $_GET['razao'] != "" && isset($_GET["quantidade"]) && $_GET['quantidade'] != "") {
    $inicio = $_GET["inicio"];
    $razao = $_GET["razao"];
    $quantidade = $_GET["quantidade"];

    for ($i = 0; $i < $quantidade; $i++) {
        echo $inicio . "<br>";
        $inicio = $inicio + $razao;
    }
}





?>
