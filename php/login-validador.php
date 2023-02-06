<?php
    //Verifica se a conexao esta autenticada no sistema, se nao estiver, retorna a conexao para a index.php
    session_start();
    if(isset($_SESSION['user_accont_id'])){
        header('Location: ../../index.php');
        session_destroy();
        exit();
    }
?>