
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--titulo e logo da pagina-->
    <title>Little Host</title>
    <link rel="icon" href="img/logo6.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="css/navFooter.css">

</head>
<body>

    <!-- inico do navbar-->    
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->


    <!-- inico da home-->
    <section class="home" id="home">

        <div class="content">
            <h3>Bem vindo ao Little Host</h3>
            <p>aqui você encontra de forma segura e<br>  <!---texto --->
                rápida um cuidador para seu animal.</p>
            <a href="anfitriao.php" class="btn">Conhecer</a>
        </div>

    </section>

    <!-- home section ends -->


    <section class="about" id="about">

        <h1 class="heading"> <span>Sobre</span> nós </h1><br>

        <div class="row">

            <div class="dogWhite">
                <img src="img/dogWhite2.jpg"  alt="">
            </div>

            <div class="content">
                <h3>o que nos faz especial?</h3>
                <p>Sabemos o papel importante que um animal de estimação faz na vida 
                    de qualquer pessoa, por isso estamos dispóstos a oferecerde forma rápida e segura 
                    um cuidador responsável para o seu bichinho de estimação.
                <a href="sobre.php" class="btn">Ler mais</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading">  <span>Anfitriões</span> </h1>
    
            <div class="container">
            <div class="hero-content">
                <p>Os anfitriões e cuidadores de animais desempenham um papel extremamente importante na 
                    sociedade, especialmente em um mundo onde o amor e o cuidado pelos animais são cada 
                    vez mais valorizados. Suas funções têm impactos positivos tanto para os animais quanto 
                    para os tutores desses animais. Algumas das principais razões pelas quais os anfitriões 
                    e cuidadores de animais são importantes.</p>
            </div>
        <div class="hero-image">
            <img src="img/dogPraia.jpg">
        </div>
    </div>
    </section>


    <!--inicio footer-->
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
    <!--fim footer-->

    


</body>
</html>