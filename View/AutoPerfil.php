<?php
require_once("../Controllers/AnfitriaoController.php");

$anfitriaoCod = isset($_SESSION['anfitriao_cod']) ? $_SESSION['anfitriao_cod'] : null;
$anfitriaoController = new AnfitriaoController();
$lista = $anfitriaoController->listarDadosAnfitriaoLogado($anfitriaoCod);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <!--titulo e logo da pagina-->
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
            <img src="img/download.png" alt="Selecione uma imagem" id="imgPhoto">
          </div>
        </div>

        <input type="file" id="flImage" name="fImage" accept="image/+">
        <!--fim-->



        <!-- imagem com php botao-->
        <form action="../Controllers/enviar.php" method="post" enctype="multipart/form-data">
          <input type="file" name="arquivo">
          <input type="submit" value="Enviar">
        </form>
        <!--fim-->



        <?php
$anfitriaoCod = $_SESSION['anfitriao_cod'];

$anfitriaoController = new AnfitriaoController();
$lista = $anfitriaoController->listarDadosAnfitriaoLogado($anfitriaoCod);

if (!empty($lista)) {
    foreach ($lista as $listar) {
        echo "<h2>Dados do Anfitrião:</h2>";
        echo "<p><strong>Nome:</strong> " . $listar['nome'] . "</p>";
        echo "<p><strong>Telefone:</strong> " . $listar['telefone'] . "</p>";
        echo "<p><strong>Endereço:</strong> " . $listar['endereco'] . "</p>";
        echo "<p><strong>Cidade:</strong> " . $listar['cidade'] . "</p>";
        echo "<p><strong>Bairro:</strong> " . $listar['bairro'] . "</p>";
        echo "<p><strong>Número da Casa:</strong> " . $listar['num_casa'] . "</p>";
        echo "<p><strong>Complemento:</strong> " . $listar['complemento'] . "</p>";
        echo "<p><strong>Gênero:</strong> " . $listar['genero'] . "</p>";
        echo "<p><strong>Valor por Hora:</strong> R$ " . $listar['valor_hora'] . "</p>";
        echo "<p><strong>Preferências:</strong> " . $listar['preferencias'] . "</p>";
     
    }
} else {
    echo "<p>Nenhuma informação encontrada para este anfitrião.</p>";
}
?>

        <h1>                
       
      </div>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <div class="container">
        <div class="desc">
          <label class="custum-file-upload" for="file">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
            </div>
            <div class="text">
              <span>Insira a imagem</span>
            </div>
            <input type="file" id="file">
          </label>      
        </div>


      
        <button class="comic-button">
  <a href="EditarAnfitriao.php?anfitriao_cod=<?php echo $listar['cod']; ?>" class="btn-editar">Editar Dados Pessoais</a>
</button>

        <br>
        
          </div> 
        
        </div>
 
      <br>
      <br>
      <br>
           
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

      <script src="js/navbar.js"></script>
      <script src="js/imagem.js"></script>
      
</body>
</html>