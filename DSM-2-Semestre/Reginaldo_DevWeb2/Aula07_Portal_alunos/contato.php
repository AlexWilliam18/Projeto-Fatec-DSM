<?php
    require "includes/seguranca.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contato</title>
    <?php include "includes/head.php" ?>
</head>
<body>

    <?php include "includes/cabecalho.php" ?>

    <?php include "includes/menu.php" ?>

    <main class="container">

        <h2>Entre em Contato</h2>

        <div class="card">

            <form>

                <label>Nome:</label>
                <input type="text" required>

                <label>E-mail:</label>
                <input type="email" required>

                <label>Mensagem:</label>
                <textarea rows="5" required></textarea>

                <button type="submit">
                    Enviar
                </button>

            </form>

            <p>
                Formulário demonstrativo.
                Nenhuma mensagem será enviada.
            </p>

        </div>

    </main>

    <?php include "includes/rodape.php" ?>

</body>
</html>
