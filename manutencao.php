<!-- https://cssgradient.io/ -->

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Estamos em Manutenção!</title>
    
        <style>
            html, body { height: 100%;}
            #bg{
                background: #ff9966;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #ff5e62, #ff9966);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #ff5e62, #ff9966); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }
            .corpo {
                height:95%;
                display: flex;
                justify-content: center;
            }
            .info {
                align-self: center;
            }
            .rodape {
                align-self:flex-end;
            }

        </style>

        <script type="text/javascript">
            //Recarrega a pagina depois de 10 segundos
            setTimeout(function() {
                window.location.href = "index.php";
            }, 10000);
        </script>

    </head> 
    <body id="bg">
        <div class="corpo">
            <div class="info">
                <h5 style="color: white;font-size: 28px;font-weight: bold;text-align: center;margin-bottom: 25px;">Ooops... Estamos em Manutenção!</h5>
                <h5 style="color: white;text-align: center;font-size: 17px;">Estamos realizando uma pequena Manutenção neste momento.</h5>
                <h5 style="color: white;text-align: center;font-size: 17px;">Retornaremos em alguns minutos.</h5>
            </div>
        </div>
        <div class="rodape"><h5 style="color: white;text-align: center;font-size: 15px;font-weight: lighter;">GestorX - © Todos os Direitos Reservados</h5></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>