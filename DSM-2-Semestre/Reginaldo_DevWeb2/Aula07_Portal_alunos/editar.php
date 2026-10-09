<?php
    require "includes/seguranca.php";
    require "conexao.php";

    $id = $_GET['id'];

    $sql = "SELECT id, nome, email FROM usuarios WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":id" => $id
    ]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuario) {
        header("Location: usuarios.php");
        exit;
    }

    $erro = "";
    if (isset($_SESSION["erro"])) {
        $erro = $_SESSION["erro"];
        unset($_SESSION["erro"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Editar Usuário</title>
    <?php include "includes/head.php" ?>
</head>
<body>

    <?php include "includes/cabecalho.php" ?>

    <?php include "includes/menu.php" ?>

    <main class="container">

        <h2>Editar Usuário</h2>

        <?php if ($erro != ""): ?>
            <p class="erro">
                <?= htmlspecialchars($erro) ?>
            </p>
        <?php endif; ?>

        <div class="card">

            <form action="atualizar.php" method="POST">

                <input type="hidden" name="token" value="<?= $_SESSION["token"] ?>">

                <input
                    hidden
                    name="id"
                    value="<?= htmlspecialchars($usuario["id"]) ?>">

                <label>Nome:</label>
                <input
                    type="text"
                    name="nome"
                    value="<?= htmlspecialchars($usuario["nome"]) ?>"
                    required>

                <label>E-mail:</label>
                <input
                    type="email"
                    name="email"
                    value="<?= htmlspecialchars($usuario["email"]) ?>"
                    required>

                <label>Nova senha (deixe em branco para manter a atual):</label>
                <input type="password" name="senha">

                <label>Confirmar nova senha:</label>
                <input type="password" name="confirmar">

                <button type="submit">
                    Atualizar
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