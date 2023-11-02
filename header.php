<?php
include"conexao/conec.php";
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <title><?= $title ?></title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- PERSONAL CSS -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="row">
    <div class="col-12">
        <ul class="menu">
            <li class="menu-item"><a href="./" class="link-menu <?= $active == 1 ? "active":"" ?>" title="Home">Home</a></li>
            <li class="menu-item"><a href="register.php" class="link-menu <?=$active == 2 ? "active":"" ?>" title="Registrar">Registrar</a></li>
            <li class="menu-item"><a href="edit.php" class="link-menu <?=$active == 3 ? "active":"" ?>" title="Editar">Editar</a></li>
        </ul>
    </div>
</div>
