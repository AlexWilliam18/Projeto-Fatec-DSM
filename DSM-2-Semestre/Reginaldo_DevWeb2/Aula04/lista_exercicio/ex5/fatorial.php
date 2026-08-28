<?php
    $num = $_POST['txtnum'];
    $fatorial = 1;

    if ($num == 0) {
        echo "$num! = 1";
    } else {

        for ($i = 1; $i <= $num; $i++) {
            $fatorial = $fatorial * $i;
        }
        echo "Resultado final: $num! = $fatorial";
    }

?>