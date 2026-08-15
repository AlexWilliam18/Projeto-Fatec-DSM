<?php
    $num = $_GET['txtnum'];
    $percent = $_GET['percentnum'];
    $porcentagem = ($num * ($percent/100));
    echo "$percent% de $num é: $porcentagem";
?>