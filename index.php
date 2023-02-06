<?php 
session_start();
//Verifica o Status Manutenção
include("./php/manutencao_verificador.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="css/login.css" rel="stylesheet">
        <link href="css/formstyle.css" rel="stylesheet">
        <script src="js/remove-autocomplete.js"></script>

        <title>GestorX - Login</title>
        
        <!-- Verifica se ocorreu algum erro no retorno do Post-->
        <script type="text/javascript">
            function validaretornopost(){
                var post_message = "<?php echo $_SESSION['login_error_login']; ?>"
                if(post_message == "invalid_user"){
                    var alerta = document.getElementById("posterror");
                    alerta.classList.remove("escondeElemento");
                }
            }
        </script>
    </head>


    <body onload="validaretornopost()">   
        <div class="container2 text-center">
            <div id="login-box">
                <form method="post" action="./php/login-system.php">
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="cool">
                            <h5 id="login-title">GestorX</h5>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="floating-label">
                            
                            <input class="floating-input input_color" type="text" placeholder=" " id="user_fild_name" name="user_post_name" value="" autocomplete="off" required>
                            <span class="highlight"></span>
                            <label>Usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="floating-label">
                            <input class="floating-input input_color" type="password" placeholder=" " id="user_fild_pass" name="user_post_pass" value="" autocomplete="off" required>                  
                            <span class="highlight"></span>
                            <label>Senha</label>
                        </div>
                    </div>

                    <div class="row" onload="validaretornopost">
                        <div class="alert alert-warning align-items-center escondeElemento" id="posterror" role="alert">
                            <div>
                              Usuario ou senha invalidos, verifique os dados digitados!
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px;">
                        <button class="btn btn-danger btn-lg" type="submit" value="login">Entrar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Rodapé -->
        <div id="footer">
            <h5 style="color: white;text-align: center;font-size: 15px;font-weight: lighter;">GestorX - © Todos os Direitos Reservados</h5>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

<?php 
session_destroy();
?>