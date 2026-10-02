<?php
    require "conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];

    $sql = "INSERT INTO alunos (nome, email, curso)
        VALUES (:nome, :email, :curso)"; // :nome <- vira simbolo
    
    $stmt = $pdo->prepare($sql); // prepare <- envia a informação do sql em uma criptografia (encapsula), prepara o string

    $stmt->execute([ // Executar
        ":nome" => $nome,
        ":email" => $email,
        ":curso" => $curso
    ]);

    header("Location: index.php"); // <-- Retorna para o index