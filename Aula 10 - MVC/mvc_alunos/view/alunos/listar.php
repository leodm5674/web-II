<?php

include_once(__DIR__ . "/../../controller/AlunoController.php");

//Carrega a lista de alunos
$alunoCont = new AlunoController;
$alunos = $alunoCont->listar();
print_r($alunos);

include_once(__DIR__ . "/../include/header.php");
?>

<h3>Listagem de alunos</h3>

<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>Estrangeiro</td>
        <td>Curso</td>

    </tr>





</table>





<?php
include_once(__DIR__ . "/../include/footer.php");
?>