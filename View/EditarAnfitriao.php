<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anfitrião</title>
    <link rel="icon" href="img/logo6.png">

    <!-- Link dos arquivos CSS -->
    <link rel="stylesheet" href="css/formAnf.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleAnfitriao.css">
</head>
<body>

<!-- Início do navbar -->
<?php
include('layouts/menu.php');
?>
<!-- Fim do navbar -->

<?php
require_once('../Controllers/AnfitriaoController.php');

$anfitriaoController = new AnfitriaoController();

// Verifique se o parâmetro 'anfitriao_cod' está definido na URL
if (isset($_GET['anfitriao_cod'])) {
    $anfitriao_cod = $_GET['anfitriao_cod'];
    $anfitriao = $anfitriaoController->read($anfitriao_cod);
} else {
    echo "ID não foi fornecido na URL.";
    // Você pode tratar esse caso de erro aqui, como redirecionar para outra página ou mostrar uma mensagem de erro.
    // Por exemplo, header("Location: pagina_de_erro.php");
}
?>



<main>
        <div class="box">
            <div class="inner-box">
                <!-- começa a parte de inserir esses dados no banco de dados, como visto o método POST logo a seguir -->
                <form action="../Controllers/AnfitriaoController.php?funcao=updatelogado" method="POST" class="row g-3">
                    <input type="hidden" name="id" value="<?php echo $anfitriao_cod; ?>">
                    
                    <div class="col-md-6">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text"  class="form-control" id="Name" autocomplete="off" placeholder="Nome Completo" required name="Name" value="<?php echo $anfitriao['nome']; ?>">

                    </div>
                    <div class="col-md-6">
                        <label for="Dt_nasc" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="Dt_nasc" autocomplete="off" required name="Dt_nasc" value="<?php echo $anfitriao['dt_nasc']; ?>" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputTel" class="form-label">Telefone/celular</label>
                        <input type="number" class="form-control" id="tTel" autocomplete="off" placeholder="(00)00000-0000" required name="Telefone" value="<?php echo $anfitriao['telefone']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="Address" autocomplete="off" placeholder="Rua" required name="Endereco" value="<?php echo $anfitriao['endereco']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCidade" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="Cidade" autocomplete="off" placeholder="Cidade" required name="Cidade" value="<?php echo $anfitriao['cidade']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputBairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="Bairro" autocomplete="off" placeholder="Bairro" required name="Bairro" value="<?php echo $anfitriao['bairro']; ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputNumero" class="form-label">Número</label>
                        <input type="number" class="form-control" id="Numero" autocomplete="off" placeholder="Número" required name="Numero_Casa" value="<?php echo $anfitriao['num_casa']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputComplemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="Complemento" autocomplete="off" placeholder="Complemento" required name="Complemento" value="<?php echo $anfitriao['complemento']; ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputCEP" class="form-label">CEP</label>
                        <input type="number" class="form-control" id="CEP" autocomplete="off" placeholder="0000-000" required name="CEP" value="<?php echo $anfitriao['cep']; ?>">
                    </div>
                    <div class="col-6">
                        <label for="inputCPF" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="CPF" autocomplete="off" placeholder="0000000" required name="CPF" value="<?php echo $anfitriao['cpf']; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="Genero" class="form-label">Gênero</label>
                        <select name="Genero" id="inputGenero" autocomplete="off" required class="form-select">
                            <option <?php if($anfitriao['genero'] == "feminino") { echo "selected"; }?>>Feminino</option>
                            <option <?php if($anfitriao['genero'] == "masculino") { echo "selected"; }?>>Masculino</option>
                            <option <?php if($anfitriao['genero'] == "outro") { echo "selected"; }?>>Outro</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="VlH" class="form-label">Valor Hora</label>
                        <input type="text" class="form-control" id="VlH" autocomplete="off" required placeholder="R$ 00,00" name="VlH" value="<?php echo $anfitriao['valor_hora']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="Email" autocomplete="off" placeholder="exemplo@gmail.com" require name="Email" value="<?php echo $anfitriao['email']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Senha" class="form-label">Senha</label>
                        <input type="password" minlength="3" class="form-control" autocomplete="off" placeholder="**********" require id="inputSenha" name="Senha" value="<?php echo $anfitriao['senha']; ?>">
                    </div>
                    
                    <div class="button">
                    <label for="Preferencias" class="form-label">Preferências</label>
                        <input type="text" class="form-control" id="Preferencias" autocomplete="off" required placeholder="Preferências" name="Preferencias" value="<?php echo $anfitriao['preferencias']; ?>">
                        <button type="submit" id="btnEditar" class="comic-button">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>


<script src="js/navbar.js"></script>
</body>
</html>
