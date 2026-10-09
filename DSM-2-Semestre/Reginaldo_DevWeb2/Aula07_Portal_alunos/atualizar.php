<?php
    require "includes/seguranca.php";
    require "conexao.php";

    verificarToken(); // confere o CSRF

    $id = $_POST["id"];
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = $_POST["senha"];
    $confirmar = $_POST["confirmar"];

    // 1 - campos obrigatórios
    if ($nome == "" || $email == "") {
        $_SESSION["erro"] = "Nome e e-mail são obrigatórios.";
        header("Location: editar.php?id=" . $id);
        exit;
    }

    // 2 - email duplicado em OUTRO usuário
    $sql = "SELECT id FROM usuarios WHERE email = :email AND id != :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":email" => $email,
        ":id" => $id
    ]);

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION["erro"] = "Este e-mail já pertence a outro usuário.";
        header("Location: editar.php?id=" . $id);
        exit;
    }

    // 3 - senha: só vai trocar se algo foi digitado
    if ($senha != "") {

        if ($senha != $confirmar) {
            $_SESSION["erro"] = "A confirmação de senha não confere.";
            header("Location: editar.php?id=" . $id);
            exit;
        }

        $sql = "UPDATE usuarios SET
                nome = :nome,
                email = :email,
                senha = :senha
            WHERE id = :id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ":nome" => $nome,
            ":email" => $email,
            ":senha" => password_hash($senha, PASSWORD_DEFAULT), // novo hash
            ":id" => $id
        ]);

    } else {

        $sql = "UPDATE usuarios SET
                nome = :nome,
                email = :email
            WHERE id = :id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ":nome" => $nome,
            ":email" => $email,
            ":id" => $id
        ]);
    }

    if ($id == $_SESSION["usuario_id"]) {
        $_SESSION["usuario"] = $nome;
    }

    $_SESSION["mensagem"] = "Usuário atualizado com sucesso!";

    header("Location: usuarios.php");
