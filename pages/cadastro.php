<?php 
    require '../Classes/usuario.php';
    $usuario = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>

    <link rel="stylesheet" href="../CSS/cadastro.css">
</head>
<body>
    <h2>CADASTRO DE USUÁRIO</h2>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome."><br><br>
        <input type="email" name="email" placeholder="Digite seu email"><br><br>
        <input type="text" name="estado" placeholder="Digite o estado onde você mora."><br><br>
        <input type="password" name="senha" placeholder="Digite sua senha."><br><br>
        <input type="password" name="Confsenha" placeholder="Confirme sua senha."><br><br>
        <input class="center" type="submit" value="CADASTRAR"><br><br>
        <p>Já é cadastrado? Clique <a href="login.php">Aqui</a> para acessar.</p>

    </form>
    <?php 
        if(isset($_POST['nome']))
        {
            $nome = $_POST['nome'];
            $estado = $_POST['estado'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $confsenha = addslashes($_POST['Confsenha']);

            if(!empty($nome) && !empty($estado) && !empty($email) && !empty($senha))
            {
                $usuario->conectar("ctrl-store","localhost", "root", "");
                if($usuario->msgErro == "")
                {
                    if($senha == $confsenha)
                    {
                        if($usuario->cadastrarUsuario($nome,$estado,$email, $senha)){

                            ?>
                                <div class="msg-sucesso">
                                    <p>Usuário Cadastrado com Sucesso.</p>
                                </div>
                            <?php
                        }
                        else
                        {
                            ?>
                                <div class="msg-sucesso">
                                    <p>Usuário Já cadastrado.</p>
                                </div>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                                <div class="msg-sucesso">
                                    <p>Senha e confirmar senha não conferem</p>
                                </div>
                            <?php
                    }
                }
                else
                {
                    ?>
                                <div class="msg-sucesso">
                                    <?php echo "Erro: ".$usuario->msgErro; ?>
                                </div>
                            <?php
                }
            }
        }

    ?>
    
</body>
<a href="gerenciamento.php" class="btn-voltar">
    &#8592;
</a>
</html>