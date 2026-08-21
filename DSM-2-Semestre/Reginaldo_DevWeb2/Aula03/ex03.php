<?php
    $frutas = array(
        "Banana",
        "Abacate",
        "Tomate",
        "Melancia",
        "Morango",
        "Uva",
        "Manga",
        "Maçã"
    );
    $tamanho = count($frutas);

    for ($i=1; $i < $tamanho; $i+=2) { 
        echo "<p>$i - $frutas[$i]</p>";
    }

?>