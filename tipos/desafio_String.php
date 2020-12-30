<div class="titulo">Desafio String</div>

<?php

echo "Enuciado: Avaliados os metódos da documentação de String, quais os metódos que a posição do texto 'abc' na String '!AbcaBcabc' retorne 1?";
echo '<br>';
echo strpos('!AbcaBcabc', 'abc') . '<br>'; // função de busca que e sensitive
echo stripos('!AbcaBcabc', 'abc') . '<br>'; // função de busca que e inscestive 
echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>'; // função de busca usando outra função para deixar tudo em minusculo
echo strpos(strtolower('!AbcaBcabc'), strtolower('abc')) . '<br>'; // função de busca usando outra função para deixar tudo em minusculo