/*1. Escreva um programa que simule o funcionamento de uma calculadora. A interface de possuir o três campos, sendo:

Valor 1: deve ser informado um número
Valor 2: deve ser informado outro número
Operação: deve possibilitar ao usurio selecionar o as quatro operações: Soma, Subtração, Multiplicação e Divisão.

Ao submeter o formulário, o programa deve mostrar o resultado da operação escolhida na mesma interface onde foram informados os campos.


Também é necessário validar os campos (no backend), exibindo uma mensagem de erro caso algum deles não tenha sido preenchido.*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php" method="$_GET">
        <input type="number" placeholder="Digite um numero" name="numero1">
            <br><br>
        <input type="number" placeholder="Digite outro numero" name="numero2">
        <br><br>

        <select name="operacoes" id="">
            <option value="soma">Soma</option>
            <option value="sub">Substração</option>
            <option value="multi">Multiplicação</option>
            <option value="div">Dvisão</option>
        </select>
        <br><br>
        
        
        <button type="submit">Enviar</button>
        
    </form>

        <?php 
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        $operacao = $_GET["operacoes"];
        $resposta = 0;
        if($operacao == "soma"){
           $resposta = $numero1 + $numero2;
        }
        if($operacao == "sub"){
           $resposta = $numero1 - $numero2;
        }
        if($operacao == "multi"){
           $resposta = $numero1 * $numero2;
        }
        if($operacao == "div"){
           $resposta = $numero1 / $numero2;
        }
        echo $resposta;
        ?>


    
</body>
</html>
