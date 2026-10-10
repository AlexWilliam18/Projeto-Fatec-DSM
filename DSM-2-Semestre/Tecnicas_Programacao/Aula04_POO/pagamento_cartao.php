<?php
    require_once 'pagamento.php';
    class Pagamento_cartao extends Pagamento{
        private $numero_cartao;
        public function __construct($valor, $numero_cartao){
            parent::__construct($valor);
            $this->numero_cartao = $numero_cartao;
        }
        public function pagar(){
            return "<p>Pagamento de R$ {$this->valor} 
            processado no cartão final ". substr($this->numero_cartao, -4)."</p>";
        }
    }
?>