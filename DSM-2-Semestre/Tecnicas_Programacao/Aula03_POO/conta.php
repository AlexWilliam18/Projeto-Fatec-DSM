<?php
    class Conta {
        private int $id;
        private string $email;
        private string $senha;

        public function __construct(int $id, string $email, string $senha) {
            $this->id=$id;
            $this->email=$email;
            $this->senha=password_hash($senha, PASSWORD_DEFAULT);
        }

        public function login(string $senha) : bool
        {
            return password_verify($senha, $this->senha);
        }

        public function alterarSenha(string $nova): void {
            $this->senha=password_hash($nova, PASSWORD_DEFAULT);
            echo "Ei psiu... Deu certo! \n";
        }

        public function getId(): int{ return $this->id;}
        public function getEmail(): string{ return $this->email;}
    }
?>