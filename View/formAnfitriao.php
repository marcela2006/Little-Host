<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Host | Formulário Anfitrião</title>


    <link rel="icon" href="img/logo6.png">
    <link rel="stylesheet" href="css/formulario.css">

    
</head>
<body>
    

    <br>
    <br>


    <div id="fade" class="hide">
        <div id="loader" class="spinner-border text-info hide" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div id="message" class="hide">
          <div class="alert alert-light" role="alert">
            <h4>Mensagem:</h4>
            <p></p>
            <button id="close-message" type="button" class="btn btn-secondary">
              Fechar
            </button>
          </div>
        </div>
      </div>


    <input type="checkbox" id="one">
    <input type="checkbox" id="two">
    <input type="checkbox" id="three">
  <div class="container">
    <h1>Formulário</h1>
    <div class="indicator">
        <div class="step step1">
            <div>1</div>
            <span>Você</span>
        </div>
        <div class="line line1"></div>
        <div class="step step2">
            <div>2</div>
            <span>Você</span>
        </div>
        <div class="line line2"></div>
        <div class="step step3">
            <div>3</div>
            <span>Endereço</span>
        </div>
        <div class="line line3"></div>
        <div class="step step4">
            <div>3</div>
            <span>Login</span>
        </div>

    </div>

    <div class="panel">
        <div class="page1">
            <form action="../Controllers/AnfitriaoController.php?funcao=create" class="form">
                <h2>Dados Pessoais</h2>
                <div class="form-group">
                    <input type="text" name="Nome" required>
                    <label for="">Nome Completo</label>
                </div>
                <div class="form-group">
                    <input type="date" name="Dt_nasc" required>
                    <label for="">Data de Nascimento</label>
                </div>
                <div class="form-group">
                    <input type="text" name="genero" required>
                    <label for="">Gênero</label>
                </div>
                <div class="btn-group">
                    <label for="one" class="btn btn-f">Próximo</label>
                </div>
            </form>
        </div>

        <div class="page2">
            <form action="../Controllers/AnfitriaoController.php?funcao=create" class="form">
                <h2>Mais dados</h2>
                <div class="form-group">
                    <input type="number" id="cpf" name="CPF" length="11" minlength="11" required>
                    <label for="">CPF</label>
                </div>
                
                <div class="form-group">
                    <input type="number" name="Telefone" required>
                    <label for="">Telefone/Celular</label>
                </div>
                
                <div class="form-group">
                    <input type="number" name="VlH" required>
                    <label for="">Valor Hora</label>
                </div>
                <div class="btn-group">
                    <label for="one" class="btn">Voltar</label>
                    <label for="two" class="btn">Próximo</label>
                </div>
            </form>
        </div>

        <div class="page3">
            <form action="../Controllers/AnfitriaoController.php?funcao=create" class="form">
                <h2>Endereço</h2>
                <div class="form-group">
                    <input type="text" class="form-control shadow-none" id="cep" name="CEP" length="8" minlength="8" required/>
                    <label for="cep">CEP</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow-none" id="Endereco" name="Endereco" required disabled  data-input/>
                    <label for="address">Endereço</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow-none" id="Numero" name="Numero"  required   disabled  data-input/>
                    <label for="address">Número</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow-none" id="Complemento" name="Complemento"  required  disabled  data-input/>
                    <label for="address">Complemento</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control shadow-none" id="Cidade" name="Cidade"  required disabled   data-input/>
                    <label for="address">Cidade</label>
                </div>
                <div class="btn-group">
                    <label for="two" class="btn">Voltar</label>
                    <label for="three" class="btn">Próximo</label>
                </div>
            </form>
        </div>
        <div class="page4">
            <form action="../Controllers/AnfitriaoController.php?funcao=create" class="form">
                <h2>Login</h2>
                <div class="form-group">
                    <input type="email" name="Email" required>
                    <label for="">Email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="Senha" required>
                    <label for="">Senha</label>
                </div>
                
                <div class="btn-group">
                    <label for="three" class="btn">Voltar</label>
                    <button type="submit" class="btn">Enviar</button>
                </div>
            </form>
        </div>
          <!--fim do formulario-->

     
        
    </div>
  </div>      
  
  <!--link do arquivo js-->
  <script src="js/formAnf2.js"></script>
</body>
</html>