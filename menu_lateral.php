<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/menu_lateral.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <div id="sidebar">
        <div class="sidebar-header text-white text-center py-3 fw-bold fs-5">
            <i class="bi bi-grid"></i>
        </div>
        <div class="list-group list-group-flush">
            <a href="inicio.php" class="list-group-item list-group-item-action">
                <i class="bi bi-house"></i> <span>Início</span>
            </a>

            <a href="#" class="list-group-item list-group-item-action toggle-submenu">
                <i class="bi bi-person"></i> <span>Perfil</span>
            </a>
            <div class="submenu" id="submenu-perfil">
    <a href="meu_perfil.php" id="item-meu-perfil" class="list-group-item list-group-item-action item_submenu">
        <i class="bi bi-person-circle"></i> <span>Meu Perfil</span>
    </a>
    <a href="editar_perfil.php" id="item-editar-perfil" class="list-group-item list-group-item-action item_submenu">
        <i class="bi bi-pencil"></i> <span>Editar Perfil</span>
    </a>
</div>


            <a href="configuracoes.php" class="list-group-item list-group-item-action">
                <i class="bi bi-gear"></i> <span>Configurações</span>
            </a>
            <a href="logout.php" class="list-group-item list-group-item-action text-danger">
                <i class="bi bi-box-arrow-right"></i> <span>Sair</span>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="js/menu_lateral.js"></script>
</body>

</html>