<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <!--titulo e logo da pagina-->
    <title>Formulario Anfitrião</title>
    <link rel="icon" href="img/logo6.png">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/formAnf.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <!-- inico do navbar-->
    <?php
        include('layouts/menu.php');
    ?>
    <!-- fim do navbar-->


    <!-- inico do container-->
        <main>

            <div id="message" class="hide">
                <div class="alert alert-light" role="alert">
                  <h4>Mensagem:</h4>
                  <p></p>
                  <button id="close-message" type="button" class="btn btn-secondary">
                    Fechar
                  </button>
                </div>
              </div>

              
            <div class="box">
                <div class="inner-box">
    <!-- comeca a parte de inserir esses dados no bancos de dados, como visto o metodo POST logo a seguir-->
                    <form action="../Controllers/AnfitriaoController.php?funcao=create" method="POST" class="row g-3">
                        <div class="col-md-6">
                            <label for="inputName" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="inputName" autocomplete="off" placeholder="Nome Completo" required  name="Nome">
                            </div>
                            <div class="col-md-6">
                                <label for="inputDt_nasc" class="form-label">Data de Nacimento</label>
                                <input type="date" class="form-control" id="inputDt_nasc" autocomplete="off"  required  name="Dt_nasc">
                            </div>
                            <div class="col-md-6">
                                <label for="inputTel" class="form-label">Telefone/celular</label>
                                <input type="number" class="form-control" id="inputTel" autocomplete="off" placeholder="(00) 00000-0000" required  name="Telefone">
                            </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" autocomplete="off" placeholder="Endereço" required  name="Endereco">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="inputCity" autocomplete="off" placeholder="Cidade" required  name="Cidade">
                        </div>
                        <div class="col-md-6">
                            <label for="inputBairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="inputBairro" autocomplete="off" placeholder="Bairro" required  name="Bairro">
                        </div>
                        <div class="col-6">
                            <label for="inputNumero" class="form-label">Número</label>
                            <input type="number" class="form-control" id="inputNumero" autocomplete="off" placeholder="Número" required  name="Numero_Casa">
                        </div>
                        <div class="col-md-6">
                            <label for="inputComplemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="inputComplemento" autocomplete="off" placeholder="Complemento" required  name="Complemento">                     
                    </div>
                        <div class="col-6">
                            <label for="inputCEP" class="form-label">CEP</label>
                            <input type="number" class="form-control" id="inputCEP" autocomplete="off" placeholder="00000-000" required  name="CEP">
                        </div>
                        <div class="col-6">
                            <label for="inputCPF" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="inputCPF" autocomplete="off" placeholder="000000000-00" required  name="CPF">
                        </div>
                    
                        <div class="col-md-6">
                        <label for="inputGenero" class="form-label">Gênero</label>
                        <select  class="form-select" id="inputGenero" autocomplete="off" required name="Genero">
                            <option selected>Feminino</option>
                            <option>Masculino</option>
                            <option>Outro</option>
                        </select>
                        </div>
                        <div class="col-6">
                            <label for="inputVlH" class="form-label">Valor Hora</label>
                            <input type="text" class="form-control" id="inputVlH" autocomplete="off" placeholder="R$00,00" required  name="VlH">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" autocomplete="off" placeholder="exemplo@gmail.com" required  name="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputSenha" class="form-label">Senha</label>
                            <input type="password" minlength="3" class="form-control" id="inputSenha" autocomplete="off" placeholder="********" required  name="Senha">
                        </div>
                        
                          <!--botao para enviar dos dados cadastrados-->
                        <div class="button">
                        <label for="Preferencias" class="form-label">Preferências</label>
                        <input type="text" class="form-control" id="Preferencias" autocomplete="off" required placeholder="Preferências" name="Preferencias" >
                        <button type="submit" class="comic-button">Enviar</button>
                        </div>
                    </form>
        
                </div>

            </div>
          
    </main>

    <script src="js/navbar.js"></script>
    <script src="js/formAnf.js"></script>
    <script src="js/formAnf2.js"></script>
    
</body>
</html>