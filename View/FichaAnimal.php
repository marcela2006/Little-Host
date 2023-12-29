<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <!--titulo e logo da pagina-->
    <title>Little Host | Ficha do Animal</title>
    <link rel="icon" href="img/logo6.png">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/fichaAnim.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <!-- inico do navbar-->
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->


    <!-- inico do main-->
    <main>
        <div class="box">
            <div class="inner-box">
<!-- comeca a parte de inserir esses dados no bancos de dados, como visto o metodo POST logo a seguir-->        
                <form action="../Controllers/FichaController.php?funcao=create" method="POST" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputNameAni" class="form-label">Nome do Animal</label>
                        <input type="text" class="form-control" id="inputNameAni" placeholder="Nome Animal" name="Nome">
                        </div>
                        <div class="col-6">
                            <label for="inputEspecie" class="form-label">Espécie</label>
                            <select id="inputEspecie" class="form-select" name="Especie">
                                <option>Cachorro</option>
                                <option>Gato</option>
                            </select>
                            </div>
                    <div class="col-6">
                        <label for="inputRaca" class="form-label">Raça</label>
                        <input type="text" class="form-control" id="inputRaca" autocomplete="off" placeholder="Raça" require name="Raca">
                    </div>
                    <div class="col-6">
                        <label for="inputIdade" class="form-label">Idade</label>
                        <input type="text" class="form-control" idi="inputIdade" autocomplete="off" placeholder="Idade" require name="Idade">
                    </div>
                    <div class="col-6">
                            <label for="inputSexo" class="form-label">Sexo</label>
                            <select id="inputSexo" class="form-select" name="Sexo">
                                <option>Macho</option>
                                <option>Fêmea</option>
                            </select>
                            </div>
                    <div class="col-6">
                        <label for="inputPeso" class="form-label">Peso</label>
                        <input type="text" class="form-control" id="inputPeso" autocomplete="off" placeholder="Peso" require name="Peso">
                    </div>
                    <div class="col-6">
                        <label for="inputTamanho" class="form-label">Tamanho</label>
                        <input type="text" class="form-control" id="inputTamanho" autocomplete="off" placeholder="Tamanho" require name="Tamanho">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCaract" class="form-label">Características</label>
                        <input type="text" class="form-control" id="inputCaract" autocomplete="off" placeholder="Características" require name="Caracteristicas">
                   </div>
                    <div class="col-md-6">
                        <label for="inputComport" class="form-label">Comportamento</label>
                        <input type="text" class="form-control" id="inputComport" autocomplete="off" placeholder="Comportamento" require name="Comportamento">
                    </div>
                    <div class="col-md-6">
                        <label for="inputHistMed" class="form-label">Histórico Médico</label>
                        <input type="text" class="form-control" id="inputHistMed" autocomplete="off" placeholder="Histórico Médico" require name="HistoricoMedico">
                    </div>
                    <div class="col-md-6">
                        <label for="inputInstruc" class="form-label">Instruções Especiais</label>
                        <input type="text" class="form-control" id="inputInstruc" autocomplete="off" placeholder="Instruções Especiais" require name="Instrucoes">
                    </div>
    
        
   
                    <div class="button">
                        <input type="submit" id="btnEditar" value="Enviar" class="comic-button" />

                    </div>
                </form>
                  <!--fim do formulario-->
            </div>
            </div>
    </main>

      <!--link arquivo js-->
    <script src="js/navbar.js"></script>
    
</body>
</html>