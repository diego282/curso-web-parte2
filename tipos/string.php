<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
echo var_dump("Eu também");
echo '<br>';

// concatenação
echo "Nós também" . " somos " . '<br>';
echo "Número é:" . 123;
echo '<br>', "Também aceito", " vírgulas";
echo '<br>';
echo "'Teste'" . ' " teste" ' . '\'teste\' ' . "\"Teste\" " . "\n";
print ("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado'); // tudo maiúscula
echo '<br>' . strtolower('MINIMIZADO'); // tudo minuscúlo
echo '<br>' . ucfirst('so a primeira letra'); // so a primeira letra fica maiúscula
echo '<br>' . ucwords('todas as palavras');  //todas as primeira letras das palavras fica maiúscula
echo '<br>' . strlen('Quantas letras?');  // tamanho da string
echo '<br>' . mb_strlen('Eu também');  // tamanho da string quando tem caracter especial como acento
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // pega uma parte da string de acordo com os parâmetros 
echo '<br>' . substr_replace('isso', 'aquilo', 'Trocar isso isso');// troca quando encontra a palavra por outra determinada