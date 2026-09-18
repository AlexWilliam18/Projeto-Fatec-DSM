<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest Academy</title>
</head>
<body>
    <h1>Quest Academy</h1>
    <h3>Entre com os dados do aluno</h3>
    <form action="" method="post">
        <label for="">Entre com a primeira nota:</label><br>
        <input type="text" name="n1"><br><br>

        <label for="">Entre com a segunda nota:</label><br>
        <input type="text" name="n2"><br><br>

        <label for="">Entre com o número de faltas:</label><br>
        <input type="text" name="faltas"><br><br>

        <input type="submit" value="VERIFIQUE ALUNO">
    </form>

    <?php
        include "academia.php";
        
        verificaAprovacao($_POST['n1'], $_POST['n2'], $_POST['faltas']);
    ?>
</body>
</html>