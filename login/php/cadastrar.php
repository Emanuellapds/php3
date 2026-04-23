<?php
require 'Usuario.class.php';
$usuario = new Usuario;
$conn =  $usuario->conecta();

if($conn){
    if (isset($_POST['usuario'])){
    $nome = addslashes ( $_POST['usuario'] );
    $senha   = addslashes ( $_POST['senha'] );
    $email   = addslashes ( $_POST['email'] );

    $user = $usuario->checkUser($email);

    if( $user ){
        echo "Você já possue cadastro. Va para o login.";
        exit();

    }else{
        $user = $usuario->inserirUsuario($nome ,$email, $senha);
        
        if( $user ){
            echo"Usuario cadastrado com sucesso!";
        }else{
            echo"Erro ao te cadastrar!!";
        }
    }
}else{
    echo"Erro no Post!";
}
}