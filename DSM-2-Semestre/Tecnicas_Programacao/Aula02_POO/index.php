<?php
    //importar as classes
    require_once 'src/Personagem.php';

    //avisar o php classe que iremos usar
    use Aula02\Personagem;
    echo "============TESTE DE PERSONAGEM============<br><br>";
    //criar um personagem
    $heroi=new Personagem("Mr.Bombastic",100);
    $heroi->receberDano(50);
    $heroi->curar(20);
?>