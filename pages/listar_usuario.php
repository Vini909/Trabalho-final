<?php 
require '../classes/usuario.php';
$u = new Usuario();
$u->conectar("ctrl-store", "localhost", "root", "");

$usuarios = $u->listarUsuarios();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>

    <link rel="stylesheet" href="../CSS/lista_user.css">
</head>
<body>

<a href="gerenciamento.php" class="btn-voltar">&#8592;</a>

<h1>Lista de Usuários</h1>

<div class="tabela-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id_usuario'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['estado'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<a href="login.p
