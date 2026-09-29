<?php 

include_once("persistencia.php");

//1 - receber o id do livro

if (!isset($_GET["id"])){
    echo "Parametro ID nao informado";
    exit; //serve para fechar a paradinha
}

$id = $_GET["id"];

//2 - buscar os livros existentes no arquivo JSON

$jogador = buscaDados("jogadores.json");


//3 - encontrar o indice do livro no array 
$i = 0;
foreach ($jogador as $s) {
    if ($s["id"] == $id) {
        break;
    }

    $i++;

}

//4 - executar a funcao excluir
//array_splice ( , )

array_splice ($jogador, $i, 1);


//5 - salvar os dados no arquico JSON

salvarDados($jogador, "jogadores.json");

//6 - redirecionar para os livros.php

header("location: jogador.php");      

