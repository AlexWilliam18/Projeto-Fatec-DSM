<?php
    require "includes/seguranca.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Início</title>
    <?php include "includes/head.php" ?>
</head>
<body>

    <?php include "includes/cabecalho.php" ?>

    <?php include "includes/menu.php" ?>

    <main class="container">

        <h2>Bem-vindo ao Portal Alunos!</h2>

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
