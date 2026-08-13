
<?php

session_start();

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "admin" && $senha == "123456") {

        $_SESSION["usuario"] = $usuario;

        header("Location: painel.php");
        exit;

    } else {

        $mensagem = "Usuário ou senha incorretos!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="login-container">

        <div class="login-box">

            <h1>Login</h1>

            <p>Acesse sua conta</p>

            <?php if ($mensagem != ""): ?>

                <div class="erro">
                    <?php echo $mensagem; ?>
                </div>

            <?php endif; ?>

            <form method="POST">

                <label for="usuario">
                    Usuário
                </label>

                <input
                    type="text"
                    id="usuario"
                    name="usuario"
                    placeholder="Digite seu usuário"
                    required
                >

                <label for="senha">
                    Senha
                </label>

                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    required
                >

                <button type="submit">
                    Entrar
                </button>

            </form>

        </div>

    </div>

</body>

</html>
