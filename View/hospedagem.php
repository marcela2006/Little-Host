<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Little Host | Hospedagem</title>
    <link rel="icon" href="img/logo6.png">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/tela-adm.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
    <link rel="stylesheet" href="css/modal.css">
</head>
<body>

      <!-- inico do navbar-->
      <?php
        include('layouts/menu.php');
    ?>
      <!-- fim do navbar-->


      <!-- inico do container-->
      <div class="container">
      
        <h1>Nossos Anfitrioes</h1>
        <main>
          <section class="content">
            <h2>Hospedagem</h2>
            <table class="user-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Dia da Hospedagem</th>
                  <th>Dia de Buscar</th>
                  <th>Valor total</th>
                </tr>
              </thead>
              <tbody>
                  <tr>

                    <td><?php echo $hospedagem['data_hosp'] ?></td>
                    <td><?php echo $hospedagem['data_busca'] ?></td>
                    <td><?php echo $hospedagem['valor_total'] ?></td>

                    <td>
                    
                      <!--botao editar -->
                      <label class="btn-editar"><i class="icon ion-ios-upload-outline"></i>Editar</label>


                      <!--botao excluir -->
                      <label class="btn-excluir" for="dialog_state"><i class="icon ion-ios-upload-outline"></i>Excluir</label>


                        <!--mensagem para confirmacao da exclusao -->
                        <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                                  <div id='dialog'>
                                    <label id="dlg-back" for="dialog_state"></label>
                                    <div id='dlg-wrap'>
                                      <label id="dlg-close" for="dialog_state"><i class="icon ion-ios-close-empty"></i></label>
                                      <h2 id='dlg-header'>Realmete deseja excluir esse anfitião?</h2>
                                      <div id='dlg-content'>Após a exclusão não será possivel recuperar os dados.</div>
                                      <div id='dlg-prompt'>
                                          
                          <a class='button positive'>Sim, desejo excluir</a>
                              
                          <div class='button'><i class="icon ion-ios-close-empty"></i> Não desejo excluir</div>
                                      </div>
                                    </div>
                                  </div>
                                  <main id='main' class='main_area'>
                                    <div class='center'></div>
                                  <div id='console'></div>
                                  </main>
                      </div>
                    </td>
                  </tr>
              </tbody>
            </table>
          </section>
        </main>
      </div>


      <!--link arquivo js -->
      <script src="js/navbar.js"></script>

</body>
</html>
