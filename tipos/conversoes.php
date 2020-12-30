<div class="titulo">Conversões</div>

<?php
echo '<p>Int para Float</p>';
echo '<br>';
echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 - 1.0);
echo '<br>';
var_dump((float)+ 3);

// float para int
echo '<p>Float para Int</p>';
echo '<br>';
var_dump((int)5.8); // arredonda para baixo
echo '<br>';
var_dump(intval('2.999')); // arredonda para baixo
echo '<br>';
var_dump((int) round(2.8)); // arredonda para cima

// operações com string

echo '<p>String</p>';
var_dump(3 +"2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2); // .(ponto), junta as variaveis;
var_dump(1 + "cinco"); // operações assim deve ser evita, pq agora o php mostra mensagem de erro!
echo '<br>';
var_dump(1 + "5 cinco"); // operações assim deve ser evita, pq agora o php mostra mensagem de erro!
echo '<br>';
var_dump(1 + "cinco 5"); // operações assim deve ser evita, pq agora o php mostra mensagem de erro!
echo '<br>';
var_dump(1 + "2+5");// operações assim deve ser evita, pq agora o php mostra mensagem de erro!
echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) 10.5);
echo '<br>';
var_dump((int) 10.5);
