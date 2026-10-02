<?php
    $host = "localhost"; //127.0.0.1
    $banco = "escola";
    $usuario = "root";
    $senha = "";

    try {
        $pdo = new PDO( // cria um objeto
            "mysql:host=$host;port=3306;dbname=$banco;charset=utf8mb4", //mysql: <-- Somente mudar para o banco de dados que você utiliza
            $usuario,
            $senha
        );

        $pdo->setAttribute( // <-- Objeto $pdo chamando chave setAttribute com o código do erro
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

    } catch (PDOException $erro) {
        die("Erro na conexão: " . $erro->getMessage());
    }
