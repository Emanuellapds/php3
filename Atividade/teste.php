<?php
require "Usuario.class.php";
$usuario = new usuario ();

$conn = $usuario ->conexao();

if ( $conn ){
    $retorno = $usuario->insertUser("Emanuella Di Santi", "mabeflor3@gmail.com", "123");
    if ($retorno){
        echo "<h1>Usuario cadastrado com sucesso!!";
    }else{
        echo "Erro ao cadastrar o Usuario!!!";
    }
}else{
    echo "<h1> Banco de dados indisponivel";
}