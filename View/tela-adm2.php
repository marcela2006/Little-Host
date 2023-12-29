<?php
    include('../Controllers/AnfitriaoController.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/tela-adm.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
    <link rel="stylesheet" href="css/modal.css">
    
    <title>Little Host | Tela de Administração</title>
    <link rel="icon" href="img/logo6.png">
</head>
<body>

      <!-- inico do navbar-->
      <?php
        include('layouts/menuadm.php');
    ?>
      <!-- fim do navbar-->


      <!-- inico do container-->
      <div class="container">
      
        <h1>Nossos Anfitrioes</h1>
        <main>
          <section class="content">
            <h2>Lista de Usuários</h2>
            <table class="user-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  $AnfitriaoController = new AnfitriaoController();
                  $anfitrioes = $AnfitriaoController->listar();

                  foreach($anfitrioes as $anfitriao){
                  ?>
                  <tr>

                    <td><?php echo $anfitriao['cod'] ?></td>
                    <td><?php echo $anfitriao['nome'] ?></td>
                    <td><?php echo $anfitriao['email'] ?></td>
      
                    <td>
                     
                    <?php echo "<a href='EditarAnf.php?id=" . $anfitriao['cod'] . "' class='btn-editar'>Editar</a>"; ?>
      
                    <label onclick="excluirAnfitriao(<?php echo $anfitriao['cod']; ?>)" class="btn-excluir" for="dialog_state"><i class="icon ion-ios-upload-outline"></i>Excluir</label>

           
      
      
                              
                    </td>
      
                  </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </section>
        </main>
      </div>

      <!-- link do arquivo js  -->
      <script src="js/adm.js"></script>
      <script src="js/navbar.js"></script>
</body>
</html>

