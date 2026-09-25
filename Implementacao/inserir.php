<?php
include_once("Connection.php");

//Receber o nome a cidade do Time(GET)
$nome = "";
if (isset($_GET["nome"])){
    $nome = $_GET['nome'];
}

$cidade = "";
if (isset($_GET["cidade"])) {
    $cidade = $_GET['cidade'];
}


//1.1 - Validar
if ($nome == '' || $cidade == '') {
    echo "Informe [nome] e a [cidade] do time<br>";
    echo "<a href='listar.php'>Voltar</a>";
    exit;
    }




//2 - Inserir o Time no banco de dados
$sql = "INSERT INTO times (nome, cidade) VALUES ('" . $nome . "', '" . $cidade . "')";
$conn = Connection::getConnection();
$stmt = $conn->prepare($sql);
$stmt->execute();

//3 - Redirecionar para a Listagem
header("location: listar.php");

