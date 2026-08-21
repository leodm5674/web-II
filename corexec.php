<?php


$cor = $_POST["cor"];


echo "<body style='background-color: " . $cor . ";'>";

echo "<h2>A cor selecionada foi: " . $cor . "</h2>";
echo "<a href='corform_exec.php'>Voltar</a>";

echo "</body>";
