<?php

$pasta = "arquivos/";
$diretorio = dir($pasta);

while($arquivo = $diretorio->read()){
    if($arquivo != '.' && $arquivo != '..'){
        echo "<a href=''><img src='".$pasta.$arquivo."' width='55'></a><br>";
    }
}

?>