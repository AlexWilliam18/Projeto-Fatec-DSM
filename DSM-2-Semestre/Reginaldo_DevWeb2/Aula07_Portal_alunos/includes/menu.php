<nav class="menu">
    <a href="inicio.php">INICIO</a>
    <a href="sobre.php">SOBRE</a>
    <a href="contato.php">CONTATO</a>
    <?php if (isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "admin"): ?>
        <a href="usuarios.php">USUÁRIOS</a>
        <a href="cadastrar.php">CADASTRAR</a>
    <?php endif; ?>
    <a href="sair.php">SAIR</a>
</nav>
