<?php
    require_once 'pagamento_pix.php';
    require_once 'pagamento_cartao.php';

    $mensagem = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valorPix = $_POST['valor_pix'] ?? '';
        $valorCartao = $_POST['valor_cartao'] ?? '';
        $numeroCartao = $_POST['numero_cartao'] ?? '';

        if ($valorPix === '' && $valorCartao === '' && $numeroCartao === '') {
            $mensagem = 'Preencha os dados de pagamento.';
        } else {
            if ($valorPix !== '') {
                if (is_numeric($valorPix) && $valorPix > 0) {
                    $pix = new Pagamento_pix($valorPix);
                    $mensagem .= $pix->pagar();
                } else {
                    $mensagem .= '<p>Informe um valor válido para o Pix.</p>';
                }
            }

            if ($valorCartao !== '' || $numeroCartao !== '') {
                if (
                    is_numeric($valorCartao) &&
                    $valorCartao > 0 &&
                    preg_match('/^\d{12,19}$/', $numeroCartao)
                ) {
                    $cartao = new Pagamento_cartao($valorCartao, $numeroCartao);
                    $mensagem .= $cartao->pagar();
                } else {
                    $mensagem .= '<p>Informe o valor e um número de cartão válido.</p>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
</head>
<body>
    <h1>Pagamento</h1>

    <?= $mensagem ?>

    <form method="post">
        <h2>Pix</h2>
        <label>Valor do Pix:
            <input type="number" name="valor_pix" min="0.01" step="0.01">
        </label>

        <h2>Cartão</h2>
        <label>Número do cartão:
            <input type="text" name="numero_cartao" inputmode="numeric">
        </label>
        <br>
        <label>Valor do cartão:
            <input type="number" name="valor_cartao" min="0.01" step="0.01">
        </label>
        <br><br>
        <button type="submit">Pagar</button>
    </form>
</body>
</html>
