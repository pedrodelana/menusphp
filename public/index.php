<?php
session_start();

if($_COOKIE['usuario'])
{
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario'])
{
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Atividades</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Cursos PHP</h1>
        <h2>Indice de Exercicios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <? require_once('menu.php'); ?>
        </div>
    </main>
    <footer class="rodape"> Pedro Lana @ 2020</footer>
    
</body>
</html>