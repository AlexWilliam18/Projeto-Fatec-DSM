<?php
    $numero = $_POST['num'];

    if ($numero > 100) {
        echo "Número maior que 100!";
    } else {
        echo "Programa encerrado";
    }
?>