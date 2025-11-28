<?php
require_once "../classes/produto.php";

$produto = new Produto();
$produto->conectar("ctrl-store", "localhost", "root", "");

if ($produto->msgErro != "") {
    echo "Erro: " . $produto->msgErro;
    exit;
}

$pdo = $produto->getPdo();
$sql = $pdo->query("SELECT id_produto, nome, marca, valor FROM produtos ORDER BY id_produto DESC");
$lista = $sql->fetchAll(PDO::FETCH_ASSOC) ?? [];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="../CSS/lista_produto.css">
</head>
<body>

<a href="gerenciamento.php" class="btn-voltar">←</a>

<h1>Lista de Produtos</h1>

<div class="tabela-container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Preço</th>
            </tr>
        </thead>

        <tbody>
        <?php if (count($lista) > 0): ?>
            <?php foreach ($lista as $prod): ?>
                <tr>
                    <td><?= $prod['id_produto'] ?></td>
                    <td><?= $prod['nome'] ?></td>
                    <td><?= $prod['marca'] ?></td>
                    <td>R$ <?= number_format($prod['valor'], 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="vazio">Nenhum produto cadastrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>

    </table>

</div>

</body>
</html>
