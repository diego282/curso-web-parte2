<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;
// cosntantes não são definidas por $!!!!!
// TANTO DEFINE E CONST SÃO USADAS PARA CONSTANTES;
const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION; // VOLTA A VERSÃO DA LINGUAGEM
echo '<br>' . PHP_INT_MAX;
echo '<br>' . __LINE__; // VOLTA A LINHA
echo '<br>' . __FILE__; // O ARQUIVO
echo '<br>' . __DIR__; // ENDEREÇO DO ARQUIVO
