<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // vai considerar como string
echo '<br>',  $numero;

$texto = "SUA NOTA É: $numero";
echo '<br>', $texto;

$objeto = 'caneta';
echo "<br> Eu tenho 5 $objeto";
echo "<br> Eu tenho 5 {$objeto}s.";
echo "<br> Eu tinha 5 {$objeto}s mas perdi 3 {$objeto}s.";

