<?php
    $et = $_POST['txtnum'];
    $n1 = 0;
    $n2 = 1;

    for ($i = 2; $i < $et; $i++) {
        $temp = $n1 + $n2;
        $n1 = $n2;
        $n2 = $temp;

        echo "$temp ";
    }
?>