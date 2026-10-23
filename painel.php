<?php
session_star();

if (!lisset($SESSION["usuario"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    <h1>Bem-vindo, <?= htmlspecialchars($_SESSION["usuario"])?></h1>
    <p>Esse e o  painel logado.</p>
    <a href="sair.php">Sair</a>
</body>
</html>