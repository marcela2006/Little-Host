<?php

//print_r = $_FILES['arquivo'];

$nomeArquivo = $_FILES['arquivo']['name'];
$caminhoAtualArquivo = $_FILES['arquivo']['tmp_name'];
$caminhoSalvar = 'arquivos/'.$nomeArquivo;


if(move_uploaded_file($caminhoAtualArquivo, $caminhoSalvar)){
    header("Location: ../View/perfil.php");
}else{
    echo "Arquivo não carregado";
}

?>