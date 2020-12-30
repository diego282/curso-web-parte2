<div class="titulo">Desafio erros</div>


<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {  
    // 1 dos erros estavam aq,estava a palavra extenst e não implements
    public function metodo3() {
        echo "Estou funcionando";
    }
    
    public function metodo1() {   // tinha faltado implemtar o metodo1
    
    }
}

class Classe extends ClasseAbstrata {
    // na class estava implements e o correto e extends
    function __construct($parametro) {  

    }
    
    public function metodo2($parametro){   // tinha faltado implemtar o metodo2

    }
}

$exemplo = new Classe('...');// aqui estava sem new para estanciar
// e não tinha o paradi passado que no caso e ('...')
$exemplo->metodo3(); // 1 dos erros estavam aq, estava com . e não ->