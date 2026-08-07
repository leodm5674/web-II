<?php

$v1 = array("Nome" => "Manuel de Medeiros", "Endereço" => "Rua das Acácias", "Cidade" => "Foz do Iguaçu", "UF" => "PR");
$v2 = array("Nome" => "Juliana de Amaral", "Endereço" => "Rua dos Pinheiros ", "Cidade" => "Florianópolis", "UF" => "SC");
$v3 = array("Nome" => "Rodrigo Baidek", "Endereço" => "Rua Dom Pedro I ", "Cidade" => "Petrópolis", "UF" => "RJ");
$v4 = array("Nome" => "Fabíola da Silva", "Endereço" => "Rua Chile", "Cidade" => "Guarulhos", "UF" => "SP");

$pessoas =  array($v1, $v2, $v3, $v4);
//imprimir a tabela
echo "<table border=1>";
//Cabeçalho

echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Endereço</th>";
echo "<th>Cidade</th>";
echo "<th>UF</th>";
echo "</tr>";
foreach ($pessoas as $c) {

    echo "<tr>";
    echo "<td>" . $c["Nome"] . "</td>";
    echo "<td>" . $c["Endereço"] . "</td>";
    echo "<td>" .  $c["Cidade"]  .  "</td>";
    echo "<td>" .  $c["UF"]  .  "</td>";
    echo "</tr>";
}



echo "</table>";
