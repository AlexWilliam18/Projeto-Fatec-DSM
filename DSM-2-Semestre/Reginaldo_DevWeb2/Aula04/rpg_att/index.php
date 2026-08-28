<?php
    //Array Multidimensional - Matriz de Personagens
    $equipe =[
        ["Ronaldo", "Guerreiro", 12, 450, 85],
        ["Jonathan", "Mago", 10, 220, 140],
        ["Zeppeli", "Arqueiro", 11, 310, 110],
        ["Wilson", "Paladino", 13, 520, 75],
        ["Vanessa", "Ladina", 9, 260, 95]
    ];
    //Variáveis acumuladoras para cálculos
    $totalDano = 0;
    $totalHP = 0;
    $totalMembros = count($equipe);
?>
 
<!DOCTYPE html>
<html lang="pt-BR">
 
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de RPG - Arrays e FOR</title>
</head>
 
<body>
 
    <h1>1. Painel de Batalha da Guilda</h1>
    <p>Total de heróis carregados na memória: <strong><?php echo $totalMembros ?></strong></p>
 
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Slot (#)</th>
                <th>Nome</th>
                <th>Classe</th>
                <th>Nível</th>
                <th>HP</th>
                <th>Dano Base</th>
                <th>Crítico Estimado (1.5x)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP: Inserir aqui o laço FOR para percorrer as linhas do array $equipe -->
            <?php
                for ($i=0; $i < $totalMembros; $i++) { 
                    $nome = $equipe[$i][0];
                    $classe = $equipe[$i][1];
                    $nivel = $equipe[$i][2];
                    $hp = $equipe[$i][3];
                    $dano = $equipe[$i][4];
                    $critico = $dano * 1.5;

                    //Operações cumulativas
                    $totalHP += $hp;
                    $totalDano += $dano;

                    //Lógica condicional dentro do laço (FOR)
                    $status = ($hp > 300) ? "Pronto para Luta" : "Precisa de Cura";
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><strong><?php echo $nome; ?></strong></td>
                    <td><?php echo $classe; ?></td>
                    <td><?= $nivel ?></td>
                    <td><?= $hp ?></td>
                    <td><?= $dano ?></td>
                    <td><?= $critico ?></td>
                    <td><?= $status ?></td>
                </tr>
            <?php } ?>
            <!-- Fim do laço FOR -->
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" align="right">
                    <strong>Totais e Médias da Equipe:</strong>
                </td>
                <td>
                    <strong><?= $totalHP ?></strong> 
                    (Média: <?= round($totalHP / $totalMembros, 1)?>)
                </td>
                <td>
                    <strong><?= $totalDano ?></strong>
                </td>
                <td colspan="2">Poder Geral Calculado</td>
            </tr>
        </tfoot>
    </table>
</body>
 
</html>