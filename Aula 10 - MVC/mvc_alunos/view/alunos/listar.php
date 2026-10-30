<?php

include_once(__DIR__ . "/../../controller/AlunoController.php");

//Carrega a lista de alunos
$alunoCont = new AlunoController;
$alunos = $alunoCont->listar();

include_once(__DIR__ . "/../include/header.php");
?>

<h3>Listagem de alunos</h3>
<a href="inserir.php" class="btn btn-primary">Inserir</a>
<table class="table table-striped table-bordered">

    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>Estrangeiro</td>
        <td>Curso</td>

        <th></th>
        <?php foreach ($alunos as $a): ?>
    <tr>
        <td><?= $a->getId() ?></td>
        <td><?= $a->getNome() ?></td>
        <td><?= $a->getIdade() ?></td>
        <td><?= $a->getEstrangeiroDescr() ?></td>
        <td><?= $a->getCurso()->getNome() ?></td>

        <td>
            <a href="alterar.php?id=<?= $a->getId() ?>">
                <img src="../../img/btn_editar.png" alt="Editar">
            </a>
        </td>

        <td>
            <a href="excluir.php?id=<?= $a->getId() ?>" onclick="return confirm('Confirma Exclusao?')">
                <img src="../../img/btn_excluir.png" alt="Excluir">
            </a>
        </td>
    </tr>
<?php endforeach; ?>




</tr>





</table>





<?php
include_once(__DIR__ . "/../include/footer.php");
?>