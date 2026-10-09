<?php
    require "includes/seguranca.php";
    apenasAdmin(); // somente administradores
    require "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: usuarios.php");
        exit;
    }

    verificarToken(); // confere o CSRF

    $id = $_POST["id"];

    // proteção: o administrador não pode excluir a própria conta
    if ($id == $_SESSION["usuario_id"]) {
        $_SESSION["erro"] = "Você não pode excluir a própria conta.";
        header("Location: usuarios.php");
        exit;
    }

    $sql = "DELETE FROM usuarios WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":id" => $id
    ]);

    $_SESSION["mensagem"] = "Usuário excluído com sucesso!";

    header("Location: usuarios.php");
