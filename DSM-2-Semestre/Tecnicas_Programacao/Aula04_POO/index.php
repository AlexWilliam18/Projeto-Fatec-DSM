<?php
    require_once 'carro.php';
    require_once 'veiculo.php';
    $carro  = new Carro('Uno', 'Fiat', 4);
    $carro->abrirPorta();
?>

<p><a href="interface_pagamento.php">Acessar pagamentos</a></p>