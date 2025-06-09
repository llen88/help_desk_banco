<?php
    require_once "validador_acesso.php";
    require_once "config.php";

    if (isset($_GET['autorizar'], $_GET['id'])) {
        $id = (int) $_GET['id']; // evita injeção
        if ($_GET['autorizar'] == 'simA') {
            $sql = "UPDATE usuarios SET perfil = 'Adm' WHERE id_usuario = $id";
            $conexao->query($sql);
            header('location: autorizar_usuario.php?usuario=adm');
        } elseif ($_GET['autorizar'] == 'simT') {
            $sql = "UPDATE usuarios SET perfil = 'Tec' WHERE id_usuario = $id";
            $conexao->query($sql);
            header('location: autorizar_usuario.php?usuario=tec');
        } else {
            $sql = "UPDATE usuarios SET perfil = 'Usuario' WHERE id_usuario = $id";
            $conexao->query($sql);
            header('location: autorizar_usuario.php?usuario=usuario');
        }
    }
?>