<?php

//inicando sessão
session_start();

require 'config.php';
// sendo ela o caminho relativo ao arquivo config.php_check_syntax

$usuarioAutenticado = false;
//dados de login com posix_times
$emailUsuario = $_POST['email'];
$senhaUsuario = md5($_POST['senha']);

// valida login
$sql= "SELECT * FROM usuarios WHERE email='{$emailUsuario}'";
$res= $conexao->query($sql);
$row = $res->fetch_object();
var_dump($row);


//autenticando o usuario -->

    if ($emailUsuario == $row->email && $senhaUsuario == $row->senha) {
        $usuarioAutenticado = true;
        $_SESSION['id'] = $row-> id_usuario;
        $_SESSION['perfil'] = $row->perfil;
        $_SESSION['nome'] = $row->nome;
    }
   else {
        $usuarioAutenticado = false;
    }
//quando passa uma boleana com metodo não precisa expecificar caso ela ja for true(verdadeira)

if($usuarioAutenticado){
    //validar sessão
    $_SESSION['autenticado'] ='sim';
    header('location: home.php');
}
else{
$_SESSION['autenticado'] = 'nao';
header('location: index.php?login=erro');
}?>