<?php
    require "includes/seguranca.php";
    require "conexao.php";

    verificarToken(); // Confere o CRSF

    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];

    // 1 - campos obrigatórios
    if ($nome == "" || $email == "" || $senha == "") {
        $_SESSION["erro"] = "Preencha todos os campos.";
        header("Location: cadastrar.php");
        exit;
    }

    // 2 - confirmação da senha
    if ($senha != $confirmar) {
        $_SESSION["erro"] = "A confirmação de senha não confere.";
        header("Location: cadastrar.php");
        exit;
    }

    // 3 - Par a email duplicado
    $sql = "SELECT id FROM usuarios WHERE email = :email";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":email" => $email
    ]);

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["erro"] = "Este e-mail já está cadastrado.";
        header("Location: cadastrar.php");
        exit;
    }

    // 4 - salvar com senha em hash
    $sql = "INSERT INTO usuarios (nome, email, senha)
        VALUES (:nome, :email, :senha)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":nome" => $nome,
        ":email" => $email,
        ":senha" => password_hash($senha, PASSWORD_DEFAULT)
    ]);

    $_SESSION["mensagem"] = "Usuário cadastrado com sucesso!";

    header("Location: usuarios.php");
