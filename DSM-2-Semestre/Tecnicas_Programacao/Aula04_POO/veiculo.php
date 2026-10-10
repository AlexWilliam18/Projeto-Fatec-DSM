<?php
    class Veiculo{
        protected string $modelo;
        protected string $marca;

        public function __construct(string $modelo, string $marca){
            $this->modelo = $modelo;
            $this->marca = $marca;
        }

        public function acelerar(){
            echo "<br> O veiculo $this->modelo da marca $this->marca está acelerando.";
        }
        public function getModelo(): string{
            return $this->modelo;
        }
        public function getMarca(): string{
            return $this->marca;
        }
    }
?>