<div class="titulo">Construtor & Destrutor</div>


<?php
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade)
    { // __construct : criar um objeto parece

        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    function __destruct()
    {
        echo 'E morreu! <br>'; // __destruct: deleta o metodo, apagar, destroe 
    }

    function execução()
    {
        return "{$this->nome}, {$this->idade} anos";
    }
}
// $pessoa = new Pessoa(); da problema pq nesse exemplo o paramentro e necessario

$pessoaA = new Pessoa("Diego Souza", 19);
echo $pessoaA->execução() .'<br>';
unset($pessoaA);
echo '<br>';
$pessoaB = new Pessoa("Miranda Jóse", 59);
echo $pessoaB->execução() . '<br>';
unset($pessoaB);