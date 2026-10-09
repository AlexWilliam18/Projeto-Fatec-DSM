<?php
    require "includes/seguranca.php";

    // Mensagem de erro do salvar.php
    $erro = "";
    if (isset($_SESSION["erro"])) {
        $erro = $_SESSION["erro"];
        unset($_SESSION["erro"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Novo Usuário</title>
    <?php include "includes/head.php" ?>
</head>
<body>

    <?php include "includes/cabecalho.php" ?>

    <?php include "includes/menu.php" ?>

    <main class="container">

        <h2>Novo Usuário</h2>

        <?php if ($erro != ""): ?>
            <p class="erro">
                <?= htmlspecialchars($erro) ?>
            </p>
        <?php endif; ?>

        <div class="card">

            <form action="salvar.php" method="POST">

                <input type="hidden" name="token" value="<?= $_SESSION["token"] ?>">

                <label>Nome:</label>
                <input type="text" name="nome" required>

                <label>E-mail:</label>
                <input type="email" name="email" required>

                <label>Senha:</label>
                <input type="password" name="senha" required>

                <label>Confirmar senha:</label>
                <input type="password" name="confirmar" required>

                <button type="submit">
                    Salvar
                </button>

            </form>

            <p>
                <a href="usuarios.php">Voltar</a>
            </p>

        </div>

    </main>

    <?php include "includes/rodape.php" ?>

</body>
</html>
