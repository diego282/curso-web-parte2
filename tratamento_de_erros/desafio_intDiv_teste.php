<div class="titulo">Desafio divisão inteira</div>

<?php
require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch(\Aritmetica\NaoInteiroException $mensagem) { // ser resultado não e inteiro
    echo 'Resultado não é um número inteiro<br>';
}

try {
    echo intdiv(8, 0) . '<br>';
} catch(DivisionByZeroError $mensagem) { // trata a divisão por 0
    echo 'Divisão por zero<br>';
}

echo intdiv(8, 2) . '<br>';
echo \intdiv(8, 2) . '<br>';
echo \intdiv(8, 3) . '<br>';