<?php
    $idade = $_POST['idade'];

    if ($idade >= 60) {
        echo "Pulseira VIP para Idoso!";
    } elseif ($idade >= 18) {
        echo "Pulseira NORMAL!";
    } else {
        echo "Pulseira para MENORES!";
    }
?>