<div class="titulo">Desadio Precedência</div>

<?php

echo '<p>1. Qual o valor impresso? </p>';
echo  2 + 5 * 3 + ( 12 / 6) / (-8 + 2 ** 3); // quando a divisão por 0, agora aparece mensagem de erro
echo '<p>2. Qual expressão imprime o valor  100? </p>';
echo ' a) ', ( 1 + 2) * 20 - 15;
echo ' b) ', 4 * 5 ** 2; // essa e a correta
echo ' c) ', 2 ** 3 ** 4 /1e25;
echo ' d) ', 3 + (3 * 8) / 2 - 3;