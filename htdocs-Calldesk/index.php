<?php
session_start(); // cria a sessão
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>OpenCall - Login</title>
    <link rel="shortcut icon" href="favicon.png"/>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/index.css" type="text/css" rel="stylesheet" media="screen">
    <link href="css/indexstyle.css" type="text/css" rel="stylesheet" media="screen">
    <!-- BOOTSTRAP FIM -->


</head>
<body>
<!-- Caixa Login -->
<div class="centro">
    <div id="box_login" class="conteudo">


        <h4 id="box_login_titulo">CallDesk</h4>
        <hr id="separador">

        <div>
            <!-- SCRIPT VERIFICAÇÃO LOGIN E TRATAMENTO DE ERROS-->
            <!-- VERIFICA SE O LOGIN RETORNOU VERDADEIRO DO BANCO -->
            <?php
            if(isset($_SESSION['nao-autenticado'])):
                ?>
                <div class="error_notificacao alert alert-danger" role="alert">
                    Usuario ou senha invalido
                </div>
            <?php
            endif;
            unset($_SESSION['nao-autenticado']);
            ?>

            <!-- VERIFICA SE O POST ESTA VAZIO -->
            <?php
            if (isset($_SESSION['post-vazio'])):
                ?>
                <div class="alert alert-warning error_notificacao" role="alert">
                    Digite seu Usuario e Senha!
                </div>
            <?php
            endif;
            unset($_SESSION['post-vazio']);
            ?>
            <!-- SCRIPT VERIFICAÇÃO LOGIN -->
        </div> <!-- TRATAMENTO DE ERROS -->






        <!-- Itens do login -->
        <form class="floating-form" action="/home/Auth/login.php" method="post" autocomplete="off">
            <!-- Avoid Chrome autofill -->
            <!-- INPUT FILD USUARIO -->
            <div class="floating-label">
                <input class="floating-input input_color" type="text" placeholder=" " id="user_fild" name="user_post_name">
                <span class="highlight"></span>
                <label>Usuario</label>
            </div>
            <!-- INPUT FILD SENHA -->
            <div class="floating-label">
                <input class="floating-input pass_secur input_color" type="text" placeholder=" " name="user_post_pass"">
                <span class="highlight"></span>
                <label>Senha</label>
            </div>
            <!-- BOTÃO ENTRAR -->
            <div class="form-group">
                <button type="submit" class="btn btn-info btn-block btn-lg" id="butao_entrar">Entrar</button>
            </div>
            <!-- BOTAO REGISTRAR -->
            <div class="form-group" >
                <a type="button" href="$$$$$$$$$$$$$$$$$" class="btn btn-success btn-block btn-lg" id="botao_cadastrar">Cadastrar-se</a>
            </div>
            <!-- LINK PERDEU SENHA -->
            <div class="form-group">
                <a href="$$$$$$$$$$$$$$$$$" id="box_login_recuperar_senha"> Esqueceu a Senha ?</a>
            </div>






        </form>
    </div> <!-- CORPO LOGIN -->
    <a id="text_assinatura">CallDesk © Todos os direitos reservados - Matheus Favero - Opencall</a> <!-- ASSINATURA -->
</div>
















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
