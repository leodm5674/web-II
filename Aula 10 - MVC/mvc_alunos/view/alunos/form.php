<?php



include(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();


include_once(__DIR__ . "/../include/header.php");
?>

<h3>Inserir aluno</h3>

<form action="" method="POST">

    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="informe o nome
    " value="<?= $aluno ? $aluno->getNome() : '' ?>">
    </div>


    <div>
        <label for="idade">Idade</label>
        <input type="number" id="idade" name="idade" placeholder="informe a idade
    " value="<?= $aluno ? $aluno->getIdade() : '' ?>">
    </div>

    <div>
        <label for="">Estrangeiro</label>
        <select name="estrang" id="estrang">
            <option value="">---Selecione---</option>
            <option value="S" <?= $aluno && $aluno->getEstrangeiro() == 'S' ? 'selected' : "" ?>>Sim</option>
            <option value="N" <?= $aluno && $aluno->getEstrangeiro() == 'n' ? 'selected' : "" ?>>Não</option>
        </select>
    </div>


    <div>
        <label for="">Curso</label>
        <select name="curso" id="curso">
            <option value="">---Selecione---</option>
            <!-- opcoes geradas de forma dinamica -->
            <?php foreach ($cursos as $c): ?>
                <option value="<?= $c->getId() ?>"

                    <?php if ($aluno && $aluno->getCurso()->getId() == $c->getId())
                        echo "selected";
                    ?>><?= $c ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <div>
        <button>Gravar</button>
    </div>

</form>
<div>
    <?= $msgErro ?>

</div>


<a href="listar.php">Voltar</a>


<?php
include_once(__DIR__ . "/../include/footer.php");


?>