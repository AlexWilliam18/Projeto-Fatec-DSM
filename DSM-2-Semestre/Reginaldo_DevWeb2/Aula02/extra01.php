<?php

    $num1 = $_POST['txtnum1'];
    $num2 = $_POST['txtnum2'];
    $operador = $_POST['txtop'];

    if ($operador == 'soma') {
        $result = $num1 + $num2;
        $ope = "+";
    } elseif ($operador == "subtr"){
        $result = $num1 - $num2;
        $ope = "-";
    } elseif ($operador == "mult"){
        $result = $num1 * $num2;
        $ope = "x";
    } elseif ($operador == "div"){
        $result = $num1 / $num2;
        $ope = "÷";
    }

    echo "O resultado de $num1 $ope $num2 = $result";
?>