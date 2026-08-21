<?php
    $paises = array(
        "Brasil",
        "Chile",
        "Equador",
        "Guatemala",
        "México",
        "Moçambique",
        "Uruguai"
    );
    $tamanho = count($paises);
    
    for ($i = 0; $i < $tamanho; $i++) {
        echo "$i - $paises[$i] <br>";
    }

    echo "<hr>";

    for ($i = 0; $i < $tamanho; $i+=2) {
        echo "$i - $paises[$i] <br>";
    }

?>