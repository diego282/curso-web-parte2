<div class="titulo">Interface</div>

<?php
//a interface só pode receber as funções, mas sem nada dentro, ou seja,
//somente a descrição. e tem que ser PUBLIC, não aceita privado nem prostest!!
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
    function correr();
}

interface Felino {
    function correr();
}
// implements:  usa-se para chamar uma interface, chamar um herança entre aspas
class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'Au Au';
    }

    function mamar() {
        return "Irei usar leite!";
    }

    function correr() {
        return "vrunnnnn!";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro); 
// instanceof :Verifica se o dado object é de uma classe ou de sua classe pai.
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);