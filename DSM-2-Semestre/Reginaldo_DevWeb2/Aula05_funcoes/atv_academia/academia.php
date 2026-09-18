<?php
    function verificaAprovacao($n1, $n2, $faltas){
        $media = ($n1 + $n2) / 2;

        if($media >= 6 && $faltas < 6) {
            echo "Aprovado";
        } elseif ($media < 6) {
            echo "Reprovado por Nota";
        } elseif ($faltas >= 6) {
            echo "Reprovado por Falta";
        } 
    }
?>