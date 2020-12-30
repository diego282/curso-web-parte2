<div class="titulo">Modificador Final</div>

<?php
// final:impede que a classe ou metodo possa ser alterada na herança
abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando método 1<br>';
    }

    // não funciona pq foi usado final no metodo2
    // public function metodo2() {
    //     echo 'Extendendo método 2<br>';
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $attr = 'Valor Único!!!';
}

$unica = new Unica();
echo $unica->attr;

// não funciona pq foi usado final na class Unica
// class Duplicata extends Unica { 
//     public $att2;
// }