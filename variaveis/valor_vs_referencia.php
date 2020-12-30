<div class="titulo">Valor vs Referência</div>

<?php

// Atribuição por valor
$a = 'valor inicial';
echo "<br>$a";
$b = $a;
echo "<br>$b";
$b = 'novo valor';
echo "<br>$a";
echo " $b";
// Atribuição por Refereência
$variavelRefrencia = &$a; // & simbolo de referencia
$variavelRefrencia = "mesma referência";
echo "<br>$a $variavelRefrencia";