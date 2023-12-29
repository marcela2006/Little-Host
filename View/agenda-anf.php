<?php

require_once("../Controllers/HospedagemController.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Agenda Anfitrião</title>
    <link rel="icon" href="img/logo6.png">

    <link rel="stylesheet" type="text/css" href="css/agenda.css">
    <link rel="stylesheet" type="text/css" href="css/navFooter.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body>

<?php
include('layouts/menu.php');
?>


<div class="container">
    <h1>Sua Agenda</h1>
    <main>
        <section class="content">
            <h2>Lista de Hospedagens</h2>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Dia Hospedagem</th>
                        <th>Dia Busca</th>
                        <th>Ficha Animal</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>

<?php
   $anfitriaoCod = $_SESSION['anfitriao_cod']; // Obtém o código do tutor da sessão

   $hospedagemController = new HospedagemController();
   $hospedagens = $hospedagemController->listarHospedagensDoAnfitriao($anfitriaoCod);
   

        if (!empty($hospedagens)) {
            foreach ($hospedagens as $hospedagem) {
                echo "<tr>";
                echo "<td>" . $hospedagem['data_hosp'] . "</td>";
                echo "<td>" . $hospedagem['data_busca'] . "</td>";
           
                echo '<td><a href="animal_agenda.php?tutor_cod=' . $hospedagem['cod_tutor'] . '" class="btn-visualizar">Visualizar</a></td>';
                echo '<td><button onclick="excluirHospedagem(' . $hospedagem['cod'] . ')" class="btn-excluir">Excluir</button></td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhuma hospedagem encontrada para este anfitriao.</td></tr>";
        }
        ?>

</tbody>


            </table>
        </section>
    </main>
</div>

<script src="js/excluirHospedagem.js"></script>
<script src="js/navbar.js"></script>
</body>
</html>
