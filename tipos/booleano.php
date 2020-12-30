<div class="titulo"> Tipo Booleano</div>

<?php
echo true;
echo '<br>';
echo false;
echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false); // false e true saõ considerados boolean quando da fora das aspas
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);

// regras de convesão para booleano

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas 0 e false
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) 0.0); 
echo '<br>' . var_dump((bool) 0.000000001); 
echo '<br>' . var_dump((bool) ""); //  String com aspas vazias retorna false
echo '<br>' . var_dump((bool) "0"); //  String com aspas vazias e com 0 retorna false
echo '<br>' . var_dump((bool) " "); // String com aspas aberta retorna true
echo '<br>' . var_dump((bool) "00"); 
echo '<br>' . var_dump((bool) "false"); 
echo '<br>' . var_dump(!!"false"); // pode ser usar assim sem o bool