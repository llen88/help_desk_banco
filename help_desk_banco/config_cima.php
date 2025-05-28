<?php

//require_once "validador_acesso.php"

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','helpdesk');  

//criar a string de conexão
$conexao = new mysqli (HOST,USER,PASS,BASE); 
$conexao -> set_charset("utf8mb4");
?>

