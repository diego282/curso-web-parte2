<div class="titulo">Foreach</div>

<?php
$array = [ 1 =>'Domingo','Segunda','Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

foreach ($array as $valor){
    echo "$valor <br>";
}

foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

$matriz = [
    ['a ', 'e',' i',' o',' u'],
    ['a',' b',' c']
];

foreach($matriz as $linha){
    foreach ($linha as $letra){
    echo "$letra";
}
echo "<br>";
}

$numeros = [1,2,3,4,5];
foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar<br>";
}
print_r($numeros);