<?php
    session_start();

    if (!isset($_SESSION["usuario_id"])) {
        header("Location: index.php");
        exit;
    }

    if (!isset($_SESSION["token"])) {
        $_SESSION["token"] = bin2hex(random_bytes(32));
    }

    function verificarToken() {
        if (!isset($_POST["token"]) || !hash_equals($_SESSION["token"], $_POST["token"])) {
            die("Requisição inválida.");
        }
    }

    // Bloqueia quem não é administrador (chamar no topo das páginas de gerenciamento)
    function apenasAdmin() {
        if (!isset($_SESSION["perfil"]) || $_SESSION["perfil"] != "admin") {
            header("Location: inicio.php");
            exit;
        }
    }
