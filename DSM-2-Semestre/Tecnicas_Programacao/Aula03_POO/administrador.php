<?php
    class Administrador {
        private string $cargo;

        public function __construct(string $cargo) {
            $this->cargo=$cargo;
        }

        public function banirJogador(string $jogador):void {
            echo "O administrador está banindo o jogador: $jogador \n";
        }

        public function getCargo(): string{
            return $this->cargo;
        }
    }
?>