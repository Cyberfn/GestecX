<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: inicio.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - GestecX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Bem-vindo ao GestecX</h2>
        <p>Você está logado!</p>
        <a href="logout.php" class="btn btn-danger">Sair</a>
    </div>
</body>
</html>
