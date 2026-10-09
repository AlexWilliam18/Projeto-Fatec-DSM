<?php
    $host = "127.0.0.1"; // Problema de conexão se colocado em localhost - minha máquina pessoal é confusa...
    $banco = "portal";
    $usuario = "root";
    $senha = "";

    try {
        $pdo = new PDO( 
            "mysql:host=$host;dbname=$banco;charset=utf8mb4",
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
