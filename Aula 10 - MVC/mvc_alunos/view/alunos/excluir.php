
<?php
include_once(__DIR__ . "/../../controller/AlunoController.php");
if (isset($_GET["id"]))
    $id = $_GET["id"];

if (! $id) {
    echo "ID invalido!<br>";
    echo "<a href='listar.php'Voltar</a>";
    exit();
}

$alunoCont = new AlunoController();
$alunoCont->excluir($id);

header("location: listar.php");
