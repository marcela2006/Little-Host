<?php
require_once("../Controllers/AnfitriaoController.php");

$controller = new AnfitriaoController;

// Verifique se o parâmetro 'id' está definido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = $controller->read($id);
    
} else {
    echo "ID não foi fornecido na URL.";
    // Você pode tratar esse caso de erro aqui, como redirecionar para outra página ou mostrar uma mensagem de erro.
    // Por exemplo, header("Location: pagina_de_erro.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--titulo da pagina e logo -->
    <title>Little Host | Perfil</title>
    <link rel="icon" href="img/logo6.png">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/calendario.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/agenda.css">
    <link rel="stylesheet" href="css/navFooter.css">

    <!-- link do arquivo js -->
    <script src="js/calendario.js" defer></script>
  </head>

  <body>

    <!-- inico do navbar-->
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->


    <!-- inico do container-->
    <div class="contianer">
      <div class="profile">



        <!--imagem circular com js-->
        <div class="max-width">
          <div class="imageContainer">
            <img src="img/download.png" id="imgPhoto">
          </div>
        </div>

        <input type="file" id="flImage" name="fImage" accept="image/+">
        <!--fim-->



        <!-- imagem com php botao-->
        <form action="../Controllers/enviar.php" method="post" enctype="multipart/form-data">
          <input type="file" name="arquivo">
        </form>
        <!--fim-->

        <h1>                
        <?php echo $resultado['nome']; ?>
        </h1>
        <p>Email: <?php echo $resultado['email']; ?></p>
        <p>Telefone: <?php echo $resultado['telefone']; ?></p>
        <p>Endereco: <?php echo $resultado['endereco']; ?></p>
        <p>Bairro: <?php echo $resultado['bairro']; ?></p>
        <br>
        <p>Preferencias: <?php echo $resultado['cidade']; ?></p>
      </div>



      <div class="container">
        <div class="desc">
          
          <!-- quando for adicionar as imagens do anfitriao, adicionar nessa div aqui -->

        </div>
        <br>

        <form method="post" action="../Controllers/HospedagemController.php?funcao=create&cod_anfitriao=<?php echo $resultado['cod']; ?>&cod_tutor=<?php echo $_SESSION['tutor_cod']; ?>">
          
          <input type="datetime-local" name="dia_hosp">

          <input type="datetime-local" name="dia_busca">


          <!--botao para solicitar agendamento-->
          <button class="comic-button">Agendar</button>
        </form>


        
        <br>
             


        <!--inicio do calendario-->
        <div class="calendar">          
          <div class="calendar-header">
            <!--declarando id que apresentara os meses -->
            <span class="month-picker" id="month-picker"> Março </span>
              <div class="year-picker" id="year-picker">
                <span class="year-change" id="pre-year">
                  <pre><</pre>
                </span>
                <!--declarando id que apresentara os anos -->
                <span id="year">2023 </span>
                <span class="year-change" id="next-year">
                  <pre>></pre>
                </span>
              </div>
          </div>

          <!--declarando dias da semana -->
          <div class="calendar-body">
            <div class="calendar-week-days">
              <div>Dom</div>
              <div>Seg</div>
              <div>Ter</div>
              <div>Qua</div>
              <div>Qui</div>
              <div>Sex</div>
              <div>Sáb</div>
            </div>
            <div class="calendar-days">
            </div>
          </div>
          <div class="calendar-footer">
          </div>
            
          <!--relogio que apresenta data e hora em tempo real -->
          <div class="date-time-formate">
            <div class="day-text-formate">Hoje</div>
              <div class="date-time-value">
                <div class="time-formate">02:51:20</div>
                  <div class="date-formate">11 - Setembro - 2023</div>
                </div>
              </div>
              <div class="month-list"></div>
            </div>
          </div>
        </div>
        <br>
        <br>
      </div>
      <br>
      <br>
           

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



      <!--link do arquivo js -->
      <script src="js/navbar.js"></script>
      
</body>
</html>