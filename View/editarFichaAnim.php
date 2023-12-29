
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edição de Ficha Animal</title>
    <link rel="stylesheet" href="css/styleFicha.css">
</head>
<body>

<!-- início do navbar-->
<?php
include('layouts/menu.php');
?>
<!-- fim do navbar-->

<?php
require_once('../Controllers/FichaController.php');

$fichaController = new FichaController();

// Verifique se o parâmetro 'id' está definido na URL
if (isset($_GET['cod_animal'])) {
    $cod_animal = $_GET['cod_animal'];
    $animal = $fichaController->read($cod_animal);
} else {
    echo "ID não foi fornecido na URL.";
    // Você pode tratar esse caso de erro aqui, como redirecionar para outra página ou mostrar uma mensagem de erro.
    // Por exemplo, header("Location: pagina_de_erro.php");
}
?>

<div class="container">
    <h1>Editar Ficha do Animal</h1>


    <main>
        <section class="content">
            <h1>Dados do Animal</h1>
            <img src="img/carLog.jpg" class="animal-image" id="animal-image" type="file" alt="Imagem do Animal">
            <div id="animal-info">
            <form method="post" action="../Controllers/FichaController.php?funcao=update&cod_animal=<?php echo $cod_animal; ?>">
                <label for="nome">Nome:</label>
                <input type="text" name="Name" value="<?php echo $animal['nome']; ?>"><br>

                <label for="especie">Espécie:</label>
                <input type="text" name="inputEspecie" value="<?php echo $animal['especie']; ?>"><br>

                <label for="raca">Raça:</label>
                <input type="text" name="Raca" value="<?php echo $animal['raca']; ?>"><br>

                <label for="sexo">Sexo:</label>
                <input type="text" name="inputSexo" value="<?php echo $animal['sexo']; ?>"><br>

                <label for="idade">Idade:</label>
                <input type="text" name="Idade" value="<?php echo $animal['idade']; ?>"><br>

                <label for="peso">Peso:</label>
                <input type="text" name="Peso" value="<?php echo $animal['peso']; ?>"><br>

                <label for="tamanho">Tamanho:</label>
                <input type="text" name="Tamanho" value="<?php echo $animal['tamanho']; ?>"><br>

                <label for="caracteristicas">Características:</label>
                <input type="text" name="Caracteristicas" value="<?php echo $animal['caracteristicas']; ?>"><br>

                <label for="comportamento">Comportamento:</label>
                <input type="text" name="Comportamento" value="<?php echo $animal['comportamento']; ?>"><br>

                <label for="historico_medico">Histórico Médico:</label>
                <input type="text" name="Historico_Medico" value="<?php echo $animal['historico_medico']; ?>"><br>

                <label for="instrucoes_especiais">Instruções Especiais:</label>
                <input type="text" name="Instrucoes_especiais" value="<?php echo $animal['instrucoes_especiais']; ?>"><br>

                <input type="submit" value="Atualizar Ficha">
                </form>
            </div>
        </section>
    </main>













</div>

</body>
</html>
