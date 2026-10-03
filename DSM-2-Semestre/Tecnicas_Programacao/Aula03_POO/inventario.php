<?php
    class Inventario {
        private int $capacidade;
        private array $itens = [];

        public function __construct(int $capacidade) {
            $this->capacidade=$capacidade;
        }

        public function adicionarItem(Item $item): bool {
            if (count($this->itens) >= $this->capacidade) {
                echo "Inventário cheio! \n";
                return false;
            }

            $this->itens[] = $item;
            echo "Item adicionado: " . $item->getNome() . " \n";
            return true;
        }

        public function removerItem(Item $item): void {
            foreach ($this->itens as $indice => $existente) {
                if ($existente === $item) {
                    unset($this->itens[$indice]);
                    echo "Item removido: " . $item->getNome() . " \n";
                    return;
                }
            }

            echo "Item não encontrado no inventário \n";
        }

        public function getCapacidade(): int{ return $this->capacidade;}
    }
?>