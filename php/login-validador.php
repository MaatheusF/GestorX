<?php
    //Verifica se a conexao esta autenticada no sistema, se nao estiver, retorna a conexao para a index.php
    /*if(!isset($_SESSION['user_account_id'])){
        header('Location: ../../index.php');
        session_destroy();
        exit();
    }*/

    //Valida por Cookie
    if(!isset($_COOKIE['user_account_id'])){
        header('Location: ../../index.php');
        session_destroy();
        exit();
    }
?>