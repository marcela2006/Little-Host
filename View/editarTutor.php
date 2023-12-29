<?php
require_once("../Controllers/TutorController.php");

$controller = new TutorController;

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <!--titulo e logo da pagina-->
    <title>Editar Tutor</title>
    <link rel="icon" href="img/logo6.png">
    
    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/editarHospTutor.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
    

      <!--link bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <!-- inico do navbar-->
    <?php
       include('layouts/menuadm.php');
    ?>
    <!-- fim do navbar-->


    <!-- inico do main-->
    <main>
        
        <div class="box">
            <div class="inner-box">
<!-- comeca a parte de inserir esses dados no bancos de dados, como visto o metodo POST logo a seguir-->
                    <form action="../Controllers/TutorController.php?funcao=update" method="POST" class="row g-3">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">                 

                        <div class="col-md-6">
                            <label for="inputNameTut" class="form-label">Nome do Tutor</label>
                            <input type="text" class="form-control" id="inputNameTut" placeholder="Nome Completo" name="Nome" value="<?php echo $resultado['nome'];?>">
                        </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" autocomplete="off" placeholder="exemplo@gmail.com" require name="Email" value="<?php echo $resultado['email'];?>">
                    </div>
                    <div class="col-6">
                        <label for="inputSenha" class="form-label">Senha</label>
                        <input type="password" minlength="3" class="form-control" autocomplete="off"  placeholder="*********"  require id="Senha" name="Senha" value="<?php echo $resultado['senha'];?>">
                    </div>
                    
                    <div class="button">
                        <input type="submit" id="btnEditar" value="Editar" class="comic-button" />

                    </div>
                </form>
            </div>
            </div>
    </main>

      <!--link do arquivo js-->
    <script src="js/navbar.js"></script>
    
</body>
</html>