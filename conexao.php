<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "desafio_proc";
$user = "root";
$pass = "";
// conecta ao banco de dados
$mysqli = new mysqli($host, $user, $pass, $db);
//verificar se deu erro na conexao
if($mysqli -> connect_errno)
           echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
           
           

?>
