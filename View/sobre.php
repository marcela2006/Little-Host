<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link dos arquivos css -->
    <link rel="stylesheet" type="text/css" href="css/sobre.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">

    <!--titulo da pagina e logo-->
    <title>Little Host | Sobre Nós</title>
    <link rel="icon" href="img/logo6.png">
</head>
<body>

    <!-- inico do navbar-->
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->


      <!-- inico do section-->
        <section class="hero">
            <div class="heading">
                <h1>Sobre Nós</h1>
            </div>
            
            <div class="container">
                <div class="hero-content">
                    <h2>Nossa missão</h2> <p>é fazer com que a experiência do seu animal de estimação conosco seja 
                        a mais positiva possível. Para garantir isso, mantemos uma comunicação aberta com os proprietários,
                        informando-os regularmente sobre o bem-estar e o progresso de seus queridos companheiros.</p>
                </div>
                <div class="hero-image">
                    <img src="img/cat01.jpg">
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container">
                <div class="hero-image">
                    <img src="img/dog01.jpg">
                </div>
                <div class="hero-content">
                <h2>Acreditamos</h2> <p>que uma relação de confiança e transparência é 
                    essencial para o conforto tanto dos animais quanto de seus tutores, 
                    entendemos que cada animal tem necessidades individuais, e é por isso que adaptamos 
                    nossos serviços para garantir que cada pet receba a atenção adequada.</p>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h2>Então</h2> <p>se você estiver planejando uma viagem, 
                        precisar de cuidados especiais para seu pet ou simplesmente 
                        quiser proporcionar um dia agradável e divertido ao seu animalzinho, 
                        estamos aqui para ajudar.</p>
                </div>
                <div class="hero-image">
                    <img src="img/jorgina.jpg">
                </div>
            </div>
        </section>
        <!--fim do section-->


        <!--inicio do footer -->
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
        <!-- fim do footer-->

        
      <!--link do arquivo javascript -->
        <script src="js/navbar.js"></script>
</body>
</html>