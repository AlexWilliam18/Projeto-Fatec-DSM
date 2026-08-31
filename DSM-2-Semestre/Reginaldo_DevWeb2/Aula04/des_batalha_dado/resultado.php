<?php
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];

    $dadosJogador = [];
    $dadosComputador = [];

    for ($i = 0; $i < $quantidade; $i++) {
        $dadosJogador[] = rand(1, 6);
        $dadosComputador[] = rand(1, 6);
    }

    $somaJogador = 0;
    $somaComputador = 0;

    for ($i = 0; $i < $quantidade; $i++) {
        $somaJogador += $dadosJogador[$i];
        $somaComputador += $dadosComputador[$i];
    }

    if ($somaJogador > $somaComputador) {
        $resultado = "$nome venceu a batalha!";
    } elseif ($somaJogador < $somaComputador) {
        $resultado = "O computador venceu a batalha!";
    } else {
        $resultado = "Empate!";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Batalha</title>
</head>
<body>
    <h1>Resultado da Batalha 🎲</h1>

    <h3>Dados de <?php echo $nome;?>:</h3>
    <ul>
        <?php
            for ($i = 0; $i < count($dadosJogador); $i++) {
                $numeroDado = $i + 1;
                echo "<li>Dado $numeroDado: {$dadosJogador[$i]}</li>";
            }
        ?>
    </ul>
    <p><strong>Total de <?php echo $nome;?>:</strong> <?php echo $somaJogador;?></p>

    <h3>Dados do Computador:</h3>
    <ul>
        <?php
            for ($i = 0; $i < count($dadosComputador); $i++) {
                $numeroDado = $i + 1;
                echo "<li>Dado $numeroDado: {$dadosComputador[$i]}</li>";
            }
        ?>
    </ul>
    <p><strong>Total do Computador:</strong> <?php echo $somaComputador;?></p>

    <hr>
    <h2><?php echo $resultado;?></h2>

    <br>
    <a href="index.html" style="text-decoration: none; color: blue;">Jogar novamente</a>

</body>
</html>