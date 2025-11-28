<?php
    Class Usuario
    {
        private $pdo;

        public $msgErro ="";

        public function conectar($nome, $host, $usuario, $senha); void
        {
            global $pdo;
            try{
                $pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
            }
            catch(PDOException $erro){
                $msgErro = $erro->getMessage();

            }
        }
        public function cadastrarUsuario($nome, $estado, $email, $senha)
        {
            global $pdo;

            $usuario = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
            $usuario->bindValue(":e",$email);
            if($usuario->rowCount()>0)
            {
                return false;
            }
            else{
                $usuario = $pdo->prepare("INSERT INTO usuarios (nome, estado, email, senha) VALUES (:n, :es, :e, :s)");
                $usuario->bindValue(":n",$nome);
                $usuario->bindValue(":es",$estado);
                $usuario->bindValue(":e",$email);
                $usuario->bindValue(":s",$senha);
                return true;
            }
        }
        
    }



?>