<?php
class Produto
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha);
        } catch (PDOException $erro) {
            $this->msgErro = $erro->getMessage();
        }
    }

    public function cadastrarProduto($nome, $marca, $descricao, $valor, $img)
    {
        // Validação básica
        if(empty($nome) || empty($marca) || empty($valor)) {
            return false;
        }

        $sql = $this->pdo->prepare("
            INSERT INTO produtos (nome, marca, descricao, valor, img)
            VALUES (:n, :m, :d, :v, :i)
        ");

        $sql->bindValue(":n", $nome);
        $sql->bindValue(":m", $marca);
        $sql->bindValue(":d", $descricao);
        $sql->bindValue(":v", $valor);
        $sql->bindValue(":i", $img);

        $sql->execute();
        return true;
    }
}
?>
