<?php
class Usuario
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

    public function cadastrarUsuario($nome, $estado, $email, $senha)
    {
        $sql = $this->pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return false;
        } else {

            $sql = $this->pdo->prepare(
                "INSERT INTO usuarios (nome, estado, email, senha) 
                 VALUES (:n, :es, :e, :s)"
            );

            $sql->bindValue(":n", $nome);
            $sql->bindValue(":es", $estado);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", $senha);

            $sql->execute();
            return true;
        }
    }


    public function listarUsuarios()
    {
        $sql = $this->pdo->query("SELECT * FROM usuarios ORDER BY id_usuario DESC");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
