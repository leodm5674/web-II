<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login IFPR</title>
</head>

<body>

    <?php
    $logado;

    if (isset($_POST['login']) && isset($_POST['senha'])) {
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        if ($login == 'ifpr' && $senha == 'tads') {
            $logado = true;
        }
    }
    ?>

    <h3>Login IFPR</h3>

    <?php if ($logado): ?>
        <span>Bem vindo ao IFPR</span>
    <?php else: ?>
        <form action="" method="POST">
            <input type="text" placeholder="informe o login" name="login">
            <br><br>
            <input type="password" placeholder="informe a senha" name="senha">
            <br><br>
            <button type="submit">Logar</button>
        </form>
    <?php endif; ?>

</body>

</html>
