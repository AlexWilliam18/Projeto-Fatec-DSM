<?php
// Incluído no topo de TODA página interna (substitui o bloco repetido de session_start + if)
session_start();

if (!isset($_SESSION["usuario_id"])) {
    header("Location: index.php");
    exit;
}

// Token CSRF: criado uma vez por sessão
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(random_bytes(32));
}

// Chamar no início de todo arquivo que recebe POST e altera dados
function verificarToken() {
    if (!isset($_POST["token"]) || !hash_equals($_SESSION["token"], $_POST["token"])) {
        die("Requisição inválida.");
    }
}
