<?php

session_start();
include('../rootlocale.php');
include('../bin/System/db_config.php');
//Guarda os dados do Post do usuario no index.php
$post_user_name = pg_escape_string($cconn, $_POST['user_post_name']);
$post_user_pass = pg_escape_string($cconn, $_POST['user_post_pass']);

//Query para buscar os dados de login no banco
$pg_query_login = "SELECT codigo, usua_login, usua_rank, usua_nome, usua_email FROM usua_usuario uu WHERE usua_login = '{$post_user_name}' AND usua_senha = '{$post_user_pass}'";

//Busca os dados no banco
$pg_result_login = pg_query($cconn, $pg_query_login);

//Verifica se ouve retorno de alguma informação
if(pg_num_rows($pg_result_login) >= 1){
    $result = pg_fetch_assoc($pg_result_login);
    //setcookie($user_accont_username, $result['usua_usuario'], time() + (86400 * 30), "/");
    header('../index2.php');
} else {
    $_SESSION['login_error_login'] = 'invalid_user';
    header('Location: ../index.php');
    exit();
}

?>