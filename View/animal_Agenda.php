<?php
require_once('../Controllers/TutorController.php');
require_once('../Controllers/FichaController.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Visualização de Dados do Animal</title>
    <link rel="stylesheet" href="css/styleFicha.css">
</head>
<body>

<!-- início do navbar-->
<?php
include('layouts/menu.php');
?>
<!-- fim do navbar-->

<div class="container">
    <h1>Ficha animal</h1>
    <main>
    <section class="content">
        <h1>Dados do Animal</h1>
        <img src="img/carLog.jpg" class="animal-image" id="animal-image" type="file" alt="Imagem do Animal">
        <div id="animal-info">
        <?php
$tutorCod = $_GET['tutor_cod'];

$tutorController = new TutorController();
$temAnimaisCadastrados = $tutorController->verificarAnimaisCadastrados($tutorCod);

if ($temAnimaisCadastrados) {
    $fichaController = new FichaController();
    $animals = $fichaController->listarAnimaisPorTutor($tutorCod);

    if (!empty($animals)) {
        foreach ($animals as $animal) {
            echo "<p><strong>Nome:</strong> " . $animal['nome'] . "</p>";
            echo "<p><strong>Espécie:</strong> " . $animal['especie'] . "</p>";
            echo "<p><strong>Raça:</strong> " . $animal['raca'] . "</p>";
            echo "<p><strong>Sexo:</strong> " . $animal['sexo'] . "</p>";
            echo "<p><strong>Idade:</strong> " . $animal['idade'] . "</p>";
            echo "<p><strong>Peso:</strong> " . $animal['peso'] . "</p>";
            echo "<p><strong>Tamanho:</strong> " . $animal['tamanho'] . "</p>";
            echo "<p><strong>Características:</strong> " . $animal['caracteristicas'] . "</p>";
            echo "<p><strong>Comportamento:</strong> " . $animal['comportamento'] . "</p>";
            echo "<p><strong>Histórico Médico:</strong> " . $animal['historico_medico'] . "</p>";
            echo "<p><strong>Instruções Especiais:</strong> " . $animal['instrucoes_especiais'] . "</p>";

            // Botão para excluir o animal
            echo '<button onclick="excluirAnimal(' . $animal['cod_animal'] . ')" class="btn-excluir">Excluir Animal</button>';
            
            // Botão para editar o animal (adicionado)
            echo '<a href="editarfichaanim.php?cod_animal=' . $animal['cod_animal'] . '" class="btn-editar">Editar Animal</a>';
        }
    } else {
        echo "Nenhum animal cadastrado por este tutor.";
    }
} else {
    echo "Nenhum animal cadastrado por este tutor.";
}
?>
        </div>
    </section>
</main>
</div>
<script src="js/excluirAnimal.js"></script>
</body>
</html>
