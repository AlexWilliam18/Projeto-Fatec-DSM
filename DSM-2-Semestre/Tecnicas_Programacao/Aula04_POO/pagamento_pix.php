<?php
    require_once 'pagamento.php';
    class Pagamento_pix extends Pagamento{
        public function pagar(){
            return "<p>Pagamento de R$ {$this->valor} processado via PIX</p>";
        }
    }
?>