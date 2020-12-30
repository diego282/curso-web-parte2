<div class="titulo">Variáveis Básicas</div>

<?php
$numeroA = 13; // $ e comando para variaveis em php
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 2;
$soma = $a + $b;
echo $soma;
echo '<br>';
echo isset($soma);
unset($soma);
echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br>',$variavel;

$variavel = "Eu sou uma string";
echo '<br>',$variavel;

// nomes de variaveis
$var = "valída";
$var1 = "valído";
$VAR = "valido";
// $6VAR = "valido"; Modo inválido
// $VAR7% = "valido"; Modo inválido
// $%VAR8 = "valido"; Modo inválido

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);