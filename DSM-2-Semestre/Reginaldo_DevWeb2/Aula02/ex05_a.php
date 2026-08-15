<?php
    $idade = $_POST['idade'];

    if ($idade < 10) {
        echo "Desculpe, apenas alunos com 10 anos ou mais podem participar da excursão.";
    } else {
        echo "Bem-vindo à festa!";
    }

    echo "<p>Programa encerrado</p>";
?>