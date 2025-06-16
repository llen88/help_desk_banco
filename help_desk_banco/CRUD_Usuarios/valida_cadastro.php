<?php
    include '../config.php';
    //  verificar se o cadastro ja existe  
    $sql= "SELECT * FROM usuarios WHERE email='{$_POST['email']}'";
    $res= $conexao->query($sql);

    if($res->num_rows >0){

        header('location: cadastro.php?cadastro=erro');
        exit();
    }

    if($_POST['perfil'] === "-- Selecione --")
    {
    header('location: cadastro.php?validaperfil=erro');
    }
    
    else{

    $nome   =   $_POST['nome'];
    $email  =   $_POST['email'];
    $senha  =   md5($_POST['senha']);
    $perfil =   $_POST['perfil'];

    $sql = "INSERT INTO usuarios(nome, email, senha, perfil) VALUE('{$nome}',  '{$email}',  '{$senha}',  '{$perfil}')";
    $res =  $conexao -> query($sql);
    
    if($res ==true){
    header('location:../index.php?usuario=sucesso');
    }

    else{
        header('location: ../index.php?usuario=falha');
    }
}
?>
