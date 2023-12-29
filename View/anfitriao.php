
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--titulo e logo da pagina-->
    <title>Anfitriões</title>
    <link rel="icon" href="img/logo6.png">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/anfitriao.css">
    <link rel="stylesheet" href="css/navFooter.css">

</head>
<body>

    <!-- início do navbar-->
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->



        <?php

            if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
                // O usuário não está logado, então redirecione ou mostre uma mensagem de alerta.
                echo "Você precisa estar logado para acessar esta página. Redirecionando para a página de login em 10 segundos...";
                header("refresh:10;url=login-cadastro.php"); // Redirecione para a página de login após 10 segundos
                exit();
            }
               
           
            
            

            include('../Controllers/AnfitriaoController.php');

            ?>



    <!-- início do container products-->
    <section class="products" id="products">
        <h3 class="heading">  <span>Anfitriões</span> </h3>
        <div class="box-container">
            <?php
                $AnfitriaoController = new AnfitriaoController();
                $anfitrioes = $AnfitriaoController->listar();

                foreach($anfitrioes as $anfitriao){
                ?>
                <div class="box">
                    <div class="image">
                        <img src="img/perfil.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $anfitriao['nome'] ?></h3>
                    </div>
                    <div class="btn">
                    
                        <!--botao de editar-->
                        <?php echo "<a href='perfil.php?id=" . $anfitriao['cod'] . "' class='btn-editar'>Perfil</a>"; ?>
                        
                        
                    </div>
                </div>
                <?php
                }
            ?>
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

    <!-- link do arquivo js  -->
    <script src="js/script.js"></script>
    <script src="js/navbar.js"></script>

</body>
</html>
