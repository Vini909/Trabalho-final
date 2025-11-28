<?php 
    require '../classes/produto.php';
    $produto = new Produto();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

    <link rel="stylesheet" href="../CSS/cadastro.css">
</head>
<body>

<a href="home.php" class="btn-voltar">&#8592;</a>

<div class="container">

    <h2>Cadastro de Produtos</h2>

    <form method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <input type="text" name="nome" placeholder="Nome do Produto *" required>
        </div>

        <div class="form-group">
            <input type="text" name="marca" placeholder="Marca *" required>
        </div>

        <div class="form-group">
            <input type="text" name="descricao" placeholder="Descrição *" required>
        </div>

        <div class="form-group">
            <input type="number" name="valor" placeholder="Preço *" step="0.01" required>
        </div>

        <label class="upload-container">
            <input type="file" name="imagem" accept="image/*" required>
            <img src="../imgs/cam.png" class="icon-camera">
        </label>

        <input type="submit" value="Cadastrar">

    </form>

    <?php
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $marca = $_POST['marca'];
            $descricao = $_POST['descricao'];
            $valor = $_POST['valor'];

            $img = $_FILES['imagem'];
            $nomeImg = $img['name'];
            $tmpImg = $img['tmp_name'];

            $pasta = "../uploads/";
            if(!is_dir($pasta)) mkdir($pasta, 0777, true);

            $caminhoFinal = $pasta . $nomeImg;
            move_uploaded_file($tmpImg, $caminhoFinal);

            $produto->conectar("ctrl-store","localhost","root","");

            if($produto->msgErro == "")
            {
                if($produto->cadastrarProduto($nome, $marca, $descricao, $valor, $nomeImg))
                {
                    echo "<div class='msg-sucesso'>Produto cadastrado com sucesso!</div>";
                }
                else
                {
                    echo "<div class='msg-erro'>Já existe um produto com esse nome!</div>";
                }
            }
            else
            {
                echo "<div class='msg-erro'>Erro: ".$produto->msgErro."</div>";
            }
        }
    ?>

</div>

</body>
</html>
