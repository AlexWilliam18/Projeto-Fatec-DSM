<?php
    $et = $_POST['txtnum'];
    $n1 = 0;
    $n2 = 1;
    $pisos = 1;

    for ($i = 2; $i < $et; $i++) {
        $temp = $n1 + $n2;
        $pisos = $pisos + ($n1 ** 2);
        $n1 = $n2;
        $n2 = $temp;

        echo "$temp ";
    }

    $pisos = $pisos - 1;
    echo "</p>";
    echo "Para a $et º etapa necessitamos de $pisos pisos";
?>