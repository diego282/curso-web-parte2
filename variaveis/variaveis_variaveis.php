<div class="titulo">Variáveis Variáveis</div>

<?php
$a = "valorA";
$$a = "valorAA";
echo "$a {$$a}";

echo '<br>';
$epa = "opa";
$opa = "vish";
$vish = "eita";
echo "$epa {$$epa} {$$$epa}"; // quando a palavra e uma variável pode-se usar $$