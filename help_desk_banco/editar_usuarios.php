<?php
    require_once "validador_acesso.php";
    require_once "config.php";

    $sql ="SELECT * from usuarios WHERE id_usuario = {$_GET['id']}";
    $res = $conexao -> query($sql);
    $qld = $res -> num

?>