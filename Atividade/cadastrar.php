<?php
if ( isset( $_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require 'Usuario.class.php';
    $usuario = new Usuario();

    $user = $usuario-> inseruser($nome, $email,$senha);
    if( $user ){
        echo "Usuario inserido com sucesso!!!";
    }else{
        echo "Erro ao inserir o Usuario!!!";
    }
}