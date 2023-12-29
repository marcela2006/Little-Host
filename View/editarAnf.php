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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Editar Anfitrião</title>
    <link rel="icon" href="img/logo6.png">

    <!-- link do arquivo css -->
    <link rel="stylesheet" href="css/formAnf.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <!-- início do navbar-->
    <?php
       include('layouts/menuadm.php');
    ?>

    <!-- início do main-->
    <main>
        <div class="box">
            <div class="inner-box">
                <!-- começa a parte de inserir esses dados no banco de dados, como visto o método POST logo a seguir -->
                <form action="../Controllers/AnfitriaoController.php?funcao=update" method="POST" class="row g-3">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="inputName" autocomplete="off" placeholder="Nome Completo" required name="Name" value="<?php echo $resultado['nome']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputDt_nasc" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="inputDt_nasc" autocomplete="off" required name="Dt_nasc" value="<?php echo $resultado['dt_nasc']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputTel" class="form-label">Telefone/celular</label>
                        <input type="number" class="form-control" id="inputTel" autocomplete="off" placeholder="(00)00000-0000" required name="Telefone" value="<?php echo $resultado['telefone']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" autocomplete="off" placeholder="Rua" required name="Endereco" value="<?php echo $resultado['endereco']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="inputCidade" autocomplete="off" placeholder="Cidade" required name="Cidade" value="<?php echo $resultado['cidade']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputBairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="inputBairro" autocomplete="off" placeholder="Bairro" required name="Bairro" value="<?php echo $resultado['bairro']; ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputNumero" class="form-label">Número</label>
                        <input type="number" class="form-control" id="inputNumero" autocomplete="off" placeholder="Número" required name="Numero_Casa" value="<?php echo $resultado['num_casa']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputComplemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="inputComplemento" autocomplete="off" placeholder="Complemento" required name="Complemento" value="<?php echo $resultado['complemento']; ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputCEP" class="form-label">CEP</label>
                        <input type="number" class="form-control" id="inputCEP" autocomplete="off" placeholder="0000-000" required name="CEP" value="<?php echo $resultado['cep']; ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputCPF" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="inputCPF" autocomplete="off" placeholder="0000000" required name="CPF" value="<?php echo $resultado['cpf']; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="inputGenero" class="form-label">Gênero</label>
                        <select name="Genero" id="inputGenero" autocomplete="off" required class="form-select">
                            <option <?php if($resultado['genero'] == "feminino") { echo "selected"; }?>>Feminino</option>
                            <option <?php if($resultado['genero'] == "masculino") { echo "selected"; }?>>Masculino</option>
                            <option <?php if($resultado['genero'] == "outro") { echo "selected"; }?>>Outro</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="inputVlH" class="form-label">Valor Hora</label>
                        <input type="text" class="form-control" id="inputVlH" autocomplete="off" required placeholder="R$ 00,00" name="VlH" value="<?php echo $resultado['valor_hora']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" autocomplete="off" placeholder="exemplo@gmail.com" require name="Email" value="<?php echo $resultado['email']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputSenha" class="form-label">Senha</label>
                        <input type="password" minlength="3" class="form-control" autocomplete="off" placeholder="**********" require id="inputSenha" name="Senha" value="<?php echo $resultado['senha']; ?>">
                    </div>
                    <div class="button">
                        <button type="submit" id="btnEditar" class="comic-button">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

      <!--link do arquivo js-->
    <script src="js/navbar.js"></script>
</body>
</html>
