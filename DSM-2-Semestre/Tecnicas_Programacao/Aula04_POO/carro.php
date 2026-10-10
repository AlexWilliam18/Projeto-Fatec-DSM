<?php
    require_once 'Veiculo.php';
    class Carro extends Veiculo{
        private $portas;
        public function __construct($modelo, $marca, $portas){
            //chamado da classe pai
            parent::__construct($modelo, $marca);
            $this->portas = $portas;
        }
        public function abrirPorta(){
            echo "<br> O carro $this->modelo da marca $this->marca com 
            $this->portas portas está abrindo a porta\n </p>";
        }
    }
?>