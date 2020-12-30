<div class="titulo">Traits #01</div>

<?php
// trim: tira os espaços em brancos
// traits:  são pedaços individuais de código que definem métodos que podem ser utilizados por diferentes classes para proporcionar uma funcionalidade adicional
// isset: Isset é um função nativa do PHP que serve para saber se uma variável está definida.
trait validacao {
    public $a = 'Valor a';

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor c (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;
 //use: para chamar os traits
    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

// var_dump(validacao->validarString(''));

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>',$usuario->b;
echo $usuario->imprimirValorC();