<!-- link do arquivo js  -->
<script src="js/scriptt.js"></script>
<script src="js/navbar.js"></script>
<link rel="stylesheet" href="css/navFooter.css">


<?php
require_once('../Controllers/TutorController.php');
session_start();
?>

<header>
    <nav class="navbar">
        <div class="logo">
            <a href="home.php">
                <img src="img/logo.png" alt="Logo">
            </a>
        </div>
        <ul class="nav-menu">
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="sobre.php" class="nav-link">Sobre Nós</a></li>
            <li class="nav-item"><a href="anfitriao.php" class="nav-link">Anfitriões</a></li>
            
            <?php
           $tutorController = new TutorController(); 
           $temAnimaisCadastrados = $tutorController->verificarAnimaisCadastrados();
           
           if (isset($_SESSION['logado']) && $_SESSION['logado']) {
               if (isset($_SESSION['tutor_cod'])) {
                   if ($temAnimaisCadastrados) {
                       echo '<li class="nav-item"><a href="ficha.php" class="nav-link">Animal</a></li>';
                   } else {
                       echo '<li class="nav-item"><a href="FichaAnimal.php" class="nav-link">Cadastrar Animal</a></li>';
                   }
                   echo '<li class="nav-item"><a href="agenda-tutor.php" class="nav-link">Agenda</a></li>';
                   
               } elseif (isset($_SESSION['anfitriao_cod'])) {
                   echo '<li class="nav-item"><a href="AutoPerfil.php" class="nav-link">Perfil</a></li>';
                   echo '<li class="nav-item"><a href="agenda-anf.php" class="nav-link">Hospedagens</a></li>';
               }
               echo '<li class="nav-item"><a onclick="return confirmar()" href="../Controllers/logout.php">Sair</a></li>';
           } else {
               echo '<li class="nav-item"><a href="login-cadastro.php" class="nav-link">Login</a></li>';
           }
            ?>







        </ul>
        <div class="nav-icon">
            <span class="nav-resp"></span>
            <span class="nav-resp"></span>
            <span class="nav-resp"></span>
        </div>
    </nav>
</header>

<!-- fim do navbar-->
