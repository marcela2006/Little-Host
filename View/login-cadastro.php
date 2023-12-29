<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Little Host | Login/Cadastro</title>
    <link rel="icon" href="img/logo6.png">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/login-cadastro.css" >
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">

  </head>
  <body>

    <!-- inico do navbar-->
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->


      <!-- inico do container-->
      <main>
        <div class="box">
          <div class="inner-box">
            <div class="forms-wrap">


            
              <form action="../Controllers/Login.php" method="POST" autocomplete="off" class="sign-in-form" >
                <div class="logo">
                  <img src="img/logo1.png" alt="easyclass" />
                </div>

                <div class="heading">
                  <h2>Bem vindo de volta</h2>
                  <h6>Ainda não é cadastrado? Cadastre-se</h6>
                  <a href="#" class="toggle">Cadastro</a>
                </div>

  <!--   input do login do nome   -->

                <div class="actual-form">
                  <div class="input-wrap">
                    <input  type="email" class="input-field" autocomplete="off" required name="Email" />
                    <label>Email</label>
                  </div>

  <!--   input do login da senha   -->

                  <div class="input-wrap"> 
                    <input type="password" length="8" class="input-field" autocomplete="off" required name="Senha" />
                    <label>Senha</label>
                  </div>

                  <input type="submit" value="Logar" class="sign-btn" />

                </div>
              </form>

              
  <!-- cadastrar o usuario  -->

              <form action="../Controllers/TutorController.php?funcao=create" autocomplete="off" class="sign-up-form" method="POST">
                <div class="logo">
                  <img src="img/logo.png" alt="easyclass" />
                </div>

                <div class="heading">
                  <h2>Seja bem-vindo</h2>
                  <h6>Já tem cadastro?</h6>
                  <a href="#" class="toggle">Login</a>
                </div>

              <!--   input do cadasto do nome   -->

                <div class="actual-form">
                  <div class="input-wrap">
                    <input type="text" minlength="4" class="input-field" autocomplete="off"  name="Nome" />
                    <label>Nome</label>
                  </div>

            <!--   input do cadasto do Email   -->

                  <div class="input-wrap">
                    <input type="email" class="input-field" autocomplete="off" required  name="Email" />
                    <label>Email</label>
                  </div>

            <!--   input do cadasto do Senha   -->

                  <div class="input-wrap">
                    <input  type="password" length="8" class="input-field"  autocomplete="off" required name="Senha" />
                    <label>Senha</label>
                  </div>


                  <!--input do botao de cadastro -->
                  <input type="submit" value="Cadastrar" class="sign-btn" />

                  <!--mensagem que leva o usuario a fazer o cadastro como anfitriao -->
                  <p class="text">
                  Deseja se cadastrar como Anfitrião?
                    <a href="formAnf.php">Clique Aqui.</a> 
                  </p>
                </div>
              </form>

            </div>

            <!--inicio carrousel de resposividade -->
            <div class="carousel">
              <div class="images-wrapper">
                <img src="img/carLog4.jpg" class="image img-1 show" alt="" />
                <img src="img/carLog.jpg" class="image img-2" alt="" />
                <img src="img/carLog3.jpg" class="image img-3" alt="" />
              </div>

              <div class="text-slider">
                <div class="text-wrap">
                  <div class="text-group">
                    <h2>Diversão</h2>
                    <h2>Conforto</h2>
                    <h2>Cuidado</h2>
                  </div>
                </div>

                <div class="bullets">
                  <span class="active" data-value="1"></span>
                  <span data-value="2"></span>
                  <span data-value="3"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>


      <!--inicio footer -->
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
      <!--fim footer -->

    <!-- link do arquivo js  -->
    <script src="js/login-cadastro.js"></script>
    <script src="js/navbar.js"></script>
  </body>
</html>
