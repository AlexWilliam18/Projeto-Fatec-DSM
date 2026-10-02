<?php
    require_once "Conta.php";
    require_once "Administrador.php";

    // Criando instância de Classe Conta
    $conta = new Conta(1, "patati@patata.com", "12345678");
    echo $conta->login("12345678") ? "Login realizado com sucesso \n" :" Senha incorreta \n";

    // Criando instância da Classe Administrador
    $admin = new Administrador("Moderador");
    $admin->banirJogador("Patati");
?>