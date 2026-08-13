
<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>

<body>

    <h1>Bem-vindo!</h1>

    <p>Você está logado no sistema.</p>

    <a href="logout.php">Sair</a>

</body>

</html>
