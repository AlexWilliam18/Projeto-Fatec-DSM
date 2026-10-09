<?php
    $host = "localhost"; //127.0.0.1
    $banco = "portal";
    $usuario = "root";
    $senha = "";

    try {
        $pdo = new PDO( 
            "mysql:host=$host;port=3306;dbname=$banco;charset=utf8mb4",
            $usuario,
            $senha
        );

        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

    } catch (PDOException $erro) {
        die("Erro na conexão: " . $erro->getMessage());
    }
