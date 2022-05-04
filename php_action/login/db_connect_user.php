<?php
//conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "usuario";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(!$connect){
    echo "Falha na conexão";
}