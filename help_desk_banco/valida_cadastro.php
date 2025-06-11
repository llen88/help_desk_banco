
<?php

    include 'config.php';
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
    header('location: index.php?usuario=sucesso');
    }

    else{
        header('location: index.php?usuario=falha');
    }
}
?>



<!-- slq
res   conn

if se alterou mais de uma linha 
se alterou mande erro e extit

se foi 
verificar se o perfil é igualo ao seleciona?  //nao poder ficar em branco

se não 
cadastre  todas variaveis com nomes usando post (não esqueça a codificação da senha)

sql insert into  valores em oredem

abrir a coneção


se foir res true 
usuario cusssedso 
usuario falhalk -->
