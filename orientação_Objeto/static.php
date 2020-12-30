<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
    
    public static function mostrarStaticA() {
        // echo "Não estática = {$this->naoStatic}<br>";
        // echo "Estática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>";
        //self: palavra própria para chamada de um objeto pertencente a classe
        //usasse assim: self:: nome da variável com $ na frente
    }
}
// self: palavra própria para chamada de um objeto pertencente a classe
//usasse assim: self:: nome da variável com $ na frente

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = 'Alterado membro de classe!';
echo A::$static, '<br>'; // acessar diretamente pela classe