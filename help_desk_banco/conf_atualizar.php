<?php
require_once("validador_acesso.php");
require_once("config.php");

$id_chamado = $_POST['id_chamado'];
$titulo=$_POST['titulo'];
$categoria=$_POST['categoria'];
$statuschamado = ['statuschamado'];
$descricaotecnico = $_POST['descricaotecnico'];
$valor = $_POST['valor'];

$sql = "UPDATE chamados SET titulo= '$titulo', categoria= '$categoria', descricaotecnico= '$descricaotecnico', valor='$valor' WHERE id_chamado='$id_chamado'";
// var_dump($sql);

$res = $conexao->query($sql);

if($res==true) {
header('location:editar_chamado.php?atualizacao=sucesso');
                           
}else{
    header('location:editar_chamado.php?atualizacao=fracasso');
}
?>