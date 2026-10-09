<?php
    session_start();
    require "conexao.php";

    $erro = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuarios WHERE email = :email";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ":email" => $email
        ]);

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario["senha"])) {

            session_regenerate_id(true);

            $_SESSION["usuario_id"] = $usuario["id"];
            $_SESSION["usuario"] = $usuario["nome"];

            header("Location: inicio.php");
            exit;

        } else {
            $erro = "E-mail ou senha incorretos!";
        }

    }

    $total = $pdo->query("SELECT COUNT(*) FROM usuarios")->fetchColumn();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login - Portal Alunos</title>
    <?php include "includes/head.php" ?>
</head>
<body class="login">

    <div class="login-box">

        <h1>Portal Alunos</h1>
        <p>Faça seu login</p>

        <?php if ($erro != ""): ?>
            <p class="erro">
                <?= htmlspecialchars($erro) ?>
            </p>
        <?php endif; ?>

        <form method="POST">

            <input type="email"
                   name="email"
                   placeholder="E-mail"
                   required>

            <input type="password"
                   name="senha"
                   placeholder="Senha"
                   required>

            <button type="submit">Entrar</button>

        </form>

        <?php if ($total == 0): ?>
            <small>
                Nenhum usuário cadastrado.
                <a href="primeiro_usuario.php">Criar o primeiro usuário</a>
            </small>
        <?php endif; ?>

        <small>Projeto didático de PHP</small>

    </div>

</body>
</html>
