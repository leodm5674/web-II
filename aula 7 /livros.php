<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("persistencia.php");


$livros = buscarDados("livros.json");


$msgErro = "";
if (isset($_POST["titulo"])) {




    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $qtdpag = $_POST["qtd_paginas"];
    $autor = $_POST["autor"];


    $erros = array();
    if (trim($titulo) == "") {
        array_push($erros, "Informe o Título");
    }
    if (trim($genero) == "") {
        array_push($erros, "Informe o Genero");
    }
    if (trim($qtdpag) == "") {
        array_push($erros, "Informe o Quantidade de Página");
    }
    if (trim($autor) == "") {
        array_push($erros, "Informe o Autor");
    }





    if (count($erros) == 0) {

        $livro = array(
            "id" => uniqid(),
            "titulo" => $titulo,
            "genero" => $genero,
            "qtd_paginas" => $qtdpag,
            "autor" => $autor
        );
        array_push($livros, $livro);

        salvarDados($livros, "livros.json");
        header("location: livros.php");
    } else {
        //  print_r($erros);
        $msgErro = implode("<br>", $erros);
    }
}

?>



<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>

<body>

    <h1>Cadastro de livros</h1>

    <h3>Cadastre seu livro aqui</h3>
    <!--form method="POST" action="" onsubmit="return validar()"-->
    <form method="POST" action="">
        <div id="divErro" name="divErro" style="color: red">
            <?= $msgErro ?>
        </div>

        <input type="text" name="titulo" id="titulo"
            placeholder="Informe o título" />

        <br><br>

        <select name="genero" id="genero">
            <option value="">--Selecione o gênero--</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="O">Outro</option>
        </select>
        <br><br>



        <input type="text" name="autor" id="autor" placeholder="Digite nome do autor">




        <br><br>

        <input type="number" name="qtd_paginas" id="qtd_paginas"
            placeholder="Informe o número de páginas">
        <br><br>

        <input type="submit" value="Enviar" />
    </form>




    <h3>Livros cadastrados</h3>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Quant. Páginas</th>
            <th>Excluir</th>

        </tr>

        <?php
        foreach ($livros as $livrostop):    ?>

            <tr>
                <td><?php echo $livrostop["id"] ?></td>
                <td><?php echo $livrostop["titulo"] ?></td>
                <td><?php echo $livrostop["autor"] ?></td>
                <td>
                    <?php
                    if ($livrostop['genero'] == 'D') {
                        echo 'Drama';
                    } elseif ($livrostop['genero'] == 'F') {
                        echo 'Ficção';
                    } elseif ($livrostop['genero'] == 'R') {
                        echo 'Romance';
                    } else {
                        echo 'Outro';
                    }


                    ?>
                </td>
                <td><?php echo $livrostop["qtd_paginas"] ?></td>
                <td>

                    <a href="livrosexcluir.php?id=<?php echo $livrostop["id"]; ?>" onclick="return confirm('Confirma a Exclusão?')">
                        <button>Excluir</button></a>

                </td>

            </tr>

        <?php endforeach; ?>



    </table>

    <script src="validacao.js">
    </script>
</body>

</html>
