<?php
    require_once "Conta.php";
    require_once "Administrador.php";
    require_once "Item.php";
    require_once "Inventario.php";
    require_once "Jogador.php";
    require_once "Personagem.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTA VII</title>
</head>

<body>
    <div class="container">
        <h1>Sistema do Jogo GTA VII</h1>
        <hr>

        <h2>Conta</h2>
        <?php
            // Criando instância de Classe Conta
            $conta = new Conta(1, "patati@patata.com", "12345678");
            echo $conta->login("12345678") ? "Login realizado com sucesso \n <br>" : " Senha incorreta \n <br>";
            echo "<b>ID:</b> " . $conta->getId() . " <br>";
            echo "<b>E-mail:</b> " . $conta->getEmail() . " <br>";
        ?>
        <hr>

        <h2>Administrador</h2>
        <?php
            // Criando instância da Classe Administrador
            $admin = new Administrador("Moderador");
            echo "<b>Cargo:</b> " . $admin->getCargo() . " <br>";
            $admin->banirJogador("Patati");
            echo "<br>";
        ?>
        <hr>

        <h2>Jogador</h2>
        <?php
            // Criando instância da Classe Jogador
            $jogador = new Jogador("Patati", 1, 0, 50);
            echo "<b>Apelido:</b> " . $jogador->getApelido() . " <br>";
            echo "<b>Nível:</b> " . $jogador->getNivel() . " <br>";
            echo "<b>XP:</b> " . $jogador->getXp() . " <br>";
            echo "<b>Moedas:</b> " . $jogador->getMoedas() . " <br>";
            $jogador->ganharXp(30);
            echo "<br>";
            $jogador->gastarMoedas(20);
            echo "<br>";
        ?>
        <hr>

        <h2>Personagem</h2>
        <?php
            // Criando instância da Classe Personagem
            $personagem = new Personagem("Arthur", "Guerreiro", "1");
            echo "<b>Nome:</b> " . $personagem->getNome() . " <br>";
            echo "<b>Classe:</b> " . $personagem->getClasse() . " <br>";
            echo "<b>Nível:</b> " . $personagem->getNivel() . " <br>";
            $personagem->atacar();
            echo "<br>";
        ?>
        <hr>

        <h2>Item</h2>
        <?php
            // Criando instância da Classe Item
            $espada = new Item("Espada", "Rara", 100);
            echo "<b>Item:</b> " . $espada->getNome() . " <br>";
            echo "<b>Raridade:</b> " . $espada->getRaridade() . " <br>";
            echo "<b>Valor:</b> " . $espada->getValor() . " <br>";
            $espada->usar();
            echo "<br>";
        ?>
        <hr>

        <h2>Inventário</h2>
        <?php
            // Criando instância da Classe Inventario
            $inventario = new Inventario(5);
            echo "<b>Capacidade:</b> " . $inventario->getCapacidade() . " <br>";
            $inventario->adicionarItem($espada);
            echo "<br>";
        ?>
        <hr>
    </div>
</body>
</html>