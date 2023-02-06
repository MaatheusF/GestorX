<?php
include ('config/db_config.php');
session_start();

echo "Verificando Campos";

//VAI VERIFICAR SE O CAMPO USUARIO OU O CAMPO SENHA ESTÃO VAZIOS
//SE ESTIVER VAZIO VAI RETORNAR PARA A PARGINA INDEX.PHP
if(empty($_POST['user_post_name']) || empty($_POST['user_post_pass'])){
    $_SESSION['post-vazio'] = true; // CRIA UM SESSION QUE DEFINE O POST VAZIO PARA O INDEX.PHP
    header('Location: ../../index.php'); //RETORNA PARA A PAGINA INDEX.PHP
    exit();
}

//GUARDA O NOME DE USUARIO E SENHA DO POST
$post_user_name = $_POST['user_name'];
$post_user_pass = $_POST['user_pass'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "desk_db";

//Conexao
$mysqli = new mysqli($servername, $username, $password, $database);
if($mysqli -> connect_errno){
    die("Falha ao se conectar no banco de dados: ".mysqli_connect_error());
    exit();
}
echo "Connectado com Sucesso!";


//CRIA UMA QUERY QUE VAI BUSCAR OS DADOS DENTRO DO BANCO
$result = mysqli_query($mysqli,"SELECT * FROM user_account WHERE user_account_username = '{$post_user_name}' AND user_account_password = '{$post_user_pass}'");

$row = mysqli_fetch_assoc($result);
$compare1 = $result['user_account_username'];

//SE A QUANTIDADE DE ROW FOR MAIOR QUE 1, SIGNIFICA QUE O USUARIO EXISTE NO BANCO DE DADOS
if(mysqli_num_rows($result) >= 1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_account_username'] = $result['user_account_username'];
    $_SESSION['user_account_password'] = $result['user_account_password'];
    $_SESSION['user_account_id'] = $result['user_account_id'];
    $_SESSION['nao-autenticado'] = false;
    header('Location: ../dashboard/dashboard.php');
    exit();
}
if($compare1 == $post_user_name){
    header('Location: ../dashboard/dashboard.php');
    exit();
}
else{
    $_SESSION['nao-autenticado'] = true;
    header('Location: ../../index.php');
    exit();
}

