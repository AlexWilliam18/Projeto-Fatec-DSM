<?php
    require_once 'pagamento_cartao.php';
    require_once 'pagamento_pix.php';
    $pagamento1 = new Pagamento_pix(100.00);
    $pagamento2 = new Pagamento_cartao(200.00, '1234-5678-9012-3456');
    $pagamentos = [$pagamento1, $pagamento2];
    foreach($pagamentos as $pagamento){
        echo $pagamento->pagar();
    }
?>