<?php
#condfiguração de conexão com o banco de dados
#Usando um banco de dados Postgres na maquina LocalHost

$servername = "localhost";
$database = "gestorxdb";
$username = "postgres";
$password = "favero10";
$port = "5432";


#define uma variavel chamada conexao
#Esta variavel é chamada para se conectar ao banco de dados

$cconn = pg_connect("host='$servername' port='$port' dbname='$database' user='$username' password='$password'");
?>