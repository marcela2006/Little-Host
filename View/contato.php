<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        <link rel="icon" href="img/logo6.png">
        <script src="https://kit.fontawesome.com/f5a65af525.js" crossorigin="anonymous"></script>

        <!-- link do arquivo css -->
        <link rel="stylesheet" type="text/css" href="css/contato.css">
        <link rel="stylesheet" type="text/css" href="css/navFooter.css">
        <style>
            .contact {
                background-image: url(img/Fonseca.png);
            }
        </style>

    </head>

    <body>

    <!-- inico do navbar-->
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->


      <!-- inico do container contact-->
        <section class="contact">
            <div class="content">
                <h1>Fale Conosco</h1>
                <p>Obrigado por visitar o nosso site! Se você tiver alguma dúvida, sugestão, feedback ou
                    simplesmente quiser entrar em contato conosco, ficaremos felizes em ouvir você.
                </p>
            </div>

              <!--apresentando os meios de contato-->
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>Telefone</h3>
                            <p>84834-1893</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>hostinho2023@gmail.com</p>
                        </div>
                    </div>
                </div>


                  <!--iniciando formulario para envio da mensagem-->
                <div class="contactForm">
                      <!--API usada para realizar o envio da mensagem digitada para o email do Little Host-->
                    <form action="https://formsubmit.co/hostinho2023@gmail.com" method="POST">
                        <h2>Enviar Mensagem</h2>
                        <div class="inputBox">
                            <input type="text" name="Nome" required>
                            <span>Nome Completo</span>
                        </div>

                        <div class="inputBox">
                            <input type="email" name="Email" required>
                            <span>Email</span>
                        </div>

                        <div class="inputBox">
                            <textarea name="Mensagem" required placeholder="Digite sua Mensagem..."></textarea>
                        </div>

                        <div class="inputBox">
                            <input type="submit" name="" value="Enviar">
                        </div>
                    </form>
                      <!--fim do formulario-->

                </div>
            </div>
        </section>


          <!--inicio do footer-->
        <div class="footer">
            <div class="footer-images">
                <a href="#"><img src="img/x.jpg"></a>
                <a href="#"><img src="img/instagram.png"></a>
                <a href="#"><img src="img/facebook.jpg"></a>
            </div>
            <div class="footer-links">
                <a href="home.php">Home</a>
                <a href="sobre.php">Sobre Nós</a>
                <a href="contato.php">Contato</a>
                <a href="anfitriao.php">Anfitriões</a>
            </div>
            <div class="copyright">
                © 2023 Todos os direitos reservados.
            </div>
        </div>
          <!--fim do footer-->


          <!--link do arquivo js-->
        <script src="js/navbar.js"></script>
        
    </body>

</html>