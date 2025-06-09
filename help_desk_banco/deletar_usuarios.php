<?php 
    require_once "validadoer_acesso.php";
    require 'config.php';

    $sql = "DELETE FROM usuarios WHERE id_usuarios = '{$GET["id"]}';";
    $conexao -> query($sql);

    header('location: usuarios.php?delete=sucesso');
?>