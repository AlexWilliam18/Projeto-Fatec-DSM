<?php
    require "includes/seguranca.php";
    require "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: usuarios.php");
        exit;
    }

    verificarToken(); // confere o CSRF

    $id = $_POST["id"];

    $sql = "DELETE FROM usuarios WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":id" => $id
    ]);

    $_SESSION["mensagem"] = "Usuário excluído com sucesso!";

    header("Location: usuarios.php");
