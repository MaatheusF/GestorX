<?php
include("db_config.php");

$mysqli = new mysqli($servername, $username, $password, $database);
if($mysqli -> connect_errno){
    die("Falha ao se conectar no banco de dados: ".mysqli_connect_error());
    exit();
}
echo "Connectado com Sucesso!";
echo "<html><br></html>";

$result = mysqli_query($mysqli,"SELECT * FROM db_config");
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) >= 1){
    echo "Status: ".$row['db_status'];
}else{
    echo "Estatus Desconhecido";
}
mysqli_close($mysqli);
?>