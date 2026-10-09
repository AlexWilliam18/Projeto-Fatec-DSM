<?php
require "includes/seguranca.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <?php include "includes/cabecalho.php" ?>

    <?php include "includes/menu.php" ?>

    <main class="container">

        <h2>Bem-vindo ao Portal!</h2>

        <p>
            Olá,
            <?= htmlspecialchars($_SESSION["usuario"]) ?>!
        </p>

        <div class="card">

            <h3>Página Inicial</h3>

            <p>
                Este site foi desenvolvido para
                aprender PHP, banco de dados e
                reutilização de componentes.
            </p>

        </div>

    </main>

    <?php include "includes/rodape.php" ?>

</body>
</html>
