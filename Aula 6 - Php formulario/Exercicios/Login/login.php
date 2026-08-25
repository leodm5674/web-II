<?php
$sucesso = 0;  

if (isset($_POST['login']) && isset($_POST['senha'])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if ($login == "ifpr" && $senha == "tads") {
        $sucesso = 1;  // login certo, muda a variável
    } else {
        echo "Login errado";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if ($sucesso == 0) { ?>
        <form action="login.php" method="POST">
            <input type="text" name="login" placeholder="Digite seu login">
            <br><br>
            <input type="text" name="senha" placeholder="Digite a senha">
            <br><br>
            <button type="submit">login</button>
        </form>
    <?php } else { ?>
        <h2>Bem vindo ao TADS</h2>
    <?php } ?>

</body>
</html>
