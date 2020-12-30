<div class="titulo"> Laço For</div>

<?php

for ($cont = 0; $cont <= 4; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++){ // for sem o inicio usa-se assim
    echo "$cont <br>";
}

echo "<hr>";

for (; $cont <= 15;){ // for sem inicio e o incremento usa-se assim
    echo "$cont <br>";
    $cont++;
}
echo '<hr>';
echo '<p> For com uso de arrays unidimensional e multidimensional</p>';
$array = ['Domingo','Segunda','Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
print_r($array);
echo '<br>';
for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]} <br>";
}

$matriz = [
       ['a ', 'e',' i',' o',' u'],
       ['a',' b',' c']
];

echo "<hr>";

for ($i = 0; $i < count($matriz); $i++){
    for($j = 0; $j < count($matriz[$i]); $j++){
        echo"{$matriz[$i][$j]}";
    }
    echo "<br>";
}