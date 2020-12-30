<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1); // mostra os erros
// echo 4 / 0 . '<br>';

error_reporting(E_ERROR); // impede que mensagem de erro apareça, so aparece ser tiver classificado com Error 
// echo 4 / 0 . '<br>';

error_reporting(E_ALL); // reporta todos os erros
// echo 4 / 0 . '<br>';

error_reporting(~E_ALL); // não reporta nenhu, erro
echo 4 / 0 . '<br>';

echo '<hr>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
    $text = 'include';
    // $text = 'by zero';
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';

restore_error_handler();

echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';