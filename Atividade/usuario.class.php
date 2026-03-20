<?php
class Usuario{
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $pdo;

    function getId(){
        return $this->id;
    }

    function getNome(){
        return $this->nome;
    }

    function getSenha(){
        return $this->senha;
    }

    function getEmail(){
        return $this->email;
    }

    function setNome ($nome){
       $this->nome = $nome;
    }

    function setSenha ($senha){
        $this->nome = $senha;
    }

    function setEmail ($email){
        $this->nome = $email;
    }

    function conexao (){
        $banco = "mysql:dbname=banco;host=localhost";
        $usuario = "root";
        $senha = "";

        try {
            $this ->pdo = new PDO ($banco, $usuario, $senha);
            return true; 
        }catch (\Throwable $th){
            return false;
        }
    }

    function insertUser($nome, $email, $senha ){
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";
        $stmt = $this ->pdo -> prepare ($sql);
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":s", $senha);
        $stmt->bindValue(":e", $email);

        return $stmt -> execute();
    }
}