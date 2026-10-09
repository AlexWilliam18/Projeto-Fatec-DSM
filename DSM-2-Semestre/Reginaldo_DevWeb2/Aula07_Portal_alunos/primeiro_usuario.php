<?php
session_start();
require "conexao.php";

$total = $pdo->query("SELECT COUNT(*) FROM usuarios")->fetchColumn();

if ($total > 0) {
    header("Location: index.php");
    exit;
}

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];

    if ($nome == "" || $email == "" || $senha == "") {
        $erro = "Preencha todos os campos.";

    } elseif ($senha != $confirmar) {
        $erro = "A confirmação de senha não confere.";

    } else {

        $sql = "INSERT INTO usuarios (nome, email, senha)
                VALUES (:nome, :email, :senha)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ":nome" => $nome,
            ":email" => $email,
            ":senha" => password_hash($senha, PASSWORD_DEFAULT) // gera o hash
        ]);

        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primeiro Usuário - Portal Aluno</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="login">

    <div class="login-box">

        <h1>Primeiro Usuário</h1>
        <p>Crie o acesso inicial do portal</p>

        <?php if ($erro != ""): ?>
            <p class="erro">
                <?= htmlspecialchars($erro) ?>
            </p>
        <?php endif; ?>

        <form method="POST">

            <input type="text"
                   name="nome"
                   placeholder="Nome"
                   required>

            <input type="email"
                   name="email"
                   placeholder="E-mail"
                   required>

            <input type="password"
                   name="senha"
                   placeholder="Senha"
                   required>

            <input type="password"
                   name="confirmar"
                   placeholder="Confirmar senha"
                   required>

            <button type="submit">Criar usuário</button>

        </form>

        <small>Projeto didático de PHP</small>

    </div>

</body>
</html>
