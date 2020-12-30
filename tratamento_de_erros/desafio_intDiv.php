<?php
namespace Aritmetica;

class NaoInteiroException extends \Exception {

}

function intdiv($numerador, $divisor) {
    if($divisor == 0) {
        throw new \DivisionByZeroError(); // trata ser a divisão for por 0
    }

    if($numerador % $divisor > 0) {
        throw new NaoInteiroException(); // trata ser o resultado é um número inteiro
    }
    
    return $numerador / $divisor;
}