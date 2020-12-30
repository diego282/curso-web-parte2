<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
var_dump(1 + 1);
echo 1 + 2.5,'<br>';
echo 10 - 2,'<br>';
echo 2 * 5,'<br>'; // multiplicando
echo 7 / 4,'<br>'; // dividido
echo intdiv(7 , 4), '<br>'; // retorna um valor int
echo round(7 / 4), '<br>'; // aqui arredonda para cima ou para baixo
echo 7 % 2, '<br>';
echo 7 % 4, '<br>';
echo 8 % 2, '<br>'; // resto
echo 7 / 0, '<br>'; // quando e dividido por 0 da infinito
echo 4 ** 2, '<br>'; // ** representa ponteciação

// Precendência de Operadores!
// () => ** => / * % => + -
echo '<p> Precendência <p>';
echo 2 + 4 * 4, '<br>';
echo ( 2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4 )** 2, '<br>';
