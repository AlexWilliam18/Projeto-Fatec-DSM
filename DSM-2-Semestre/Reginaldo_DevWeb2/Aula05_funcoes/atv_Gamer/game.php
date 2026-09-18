<?php
    function calcularLevelUp($xpAtual, $xpGanho, $levelAtual, $hpAtual) {
        $somaXp = $xpAtual + $xpGanho;
        if($somaXp >= 1000) {
            $levelAtual++;
            $XpAtual = 0;
            $Hp = 3;
        }
        
        return [
            
        ]
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest Gamer - Resultado</title>
</head>
<body>
    <h1>Resultado dos Status do Personagem</h1>
</body>
</html>