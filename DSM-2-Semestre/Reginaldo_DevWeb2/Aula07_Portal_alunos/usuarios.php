<?php
    require "includes/seguranca.php";
    require "conexao.php";

    $sql = "SELECT id, nome, email FROM usuarios ORDER BY id";
    $stmt = $pdo->query($sql);

    $usuarios = $stmt->fetchall(PDO::FETCH_ASSOC);

    $mensagem = "";
    if (isset($_SESSION["mensagem"])) {
        $mensagem = $_SESSION["mensagem"];
        unset($_SESSION["mensagem"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Usuários</title>
    <?php include "includes/head.php" ?>
</head>
<body>

    <?php include "includes/cabecalho.php" ?>

    <?php include "includes/menu.php" ?>

    <main class="container">

        <h2>Usuários Cadastrados</h2>

        <?php if ($mensagem != ""): ?>
            <p class="sucesso">
                <?= htmlspecialchars($mensagem) ?>
            </p>
        <?php endif; ?>

        <p>
            <a href="cadastrar.php">
                <button>Novo Usuário</button>
            </a>
        </p>

        <div class="card tabela-wrap">

            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>

                <?php foreach ($usuarios as $u) : ?>
                    <tr>

                        <td><?= htmlspecialchars($u['id']) ?></td>
                        <td><?= htmlspecialchars($u['nome']) ?></td>
                        <td><?= htmlspecialchars($u['email']) ?></td>

                        <td class="acoes">

                            <a href="editar.php?id=<?= htmlspecialchars($u["id"]) ?>">
                                <button type="button">Editar</button>
                            </a>

                            <form action="excluir.php" method="POST"
                                  onsubmit="return confirm('Deseja excluir este usuário?')">

                                <input type="hidden" name="id" value="<?= htmlspecialchars($u["id"]) ?>">
                                <input type="hidden" name="token" value="<?= $_SESSION["token"] ?>">

                                <button type="submit" class="perigo">Excluir</button>

                            </form>

                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>

        </div>

    </main>

    <?php include "includes/rodape.php" ?>

</body>
</html>
