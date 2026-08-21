<?php
    $cardapio = [
        "Bebidas" =>["Água", "Suco", "Cerveja"],
        "Comidas" =>["Hambúrguer", "Pizza"],
    ];

    foreach ($cardapio as $categoria => $itens) {
        echo "<h3>$categoria</h3>";
        echo "<ol>";
            foreach ($itens as $item) {
                echo "<li>$item</li>";
            }
        echo "</ol>";
    }
?>