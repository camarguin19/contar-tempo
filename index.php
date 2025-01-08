<?php 

include_once 'sistema/configuracao.php';
require_once 'helpers.php';

if (validarUrl('http://teste.com')) {
    echo 'URL válida';
}else {
    echo 'URL inválida';
}

echo '<br>';

if (validarEmail('teste@teste.com')) {
    echo 'E-mail válido';
}else {
    echo 'E-mail inválido';
}

//var_dump(validarEmail('teste@terra.com'));

//echo '<br>';
//echo contarTempo('2024-01-07 19:59:00');
?>