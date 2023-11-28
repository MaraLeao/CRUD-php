<?php
//server link

$hostname = "localhost";
$bancodedados = "bancodados";
$user = "root";
$password = "";


 $mysqli = new mysqli($hostname, $user, $password, $bancodedados);
 if($mysqli->connect_errno){
     echo "Falha ao conectar:(" . $mysqli->connect_errno . ")".$mysqli->connect_errno;
 }
 else {
    echo "Conectado ao Banco de Dados";

 }
 
?>
