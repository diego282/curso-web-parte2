<div class="titulo">Herança</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    { // __construct : criar um objeto parece
        // -> acessar o membro, valor
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa criada! <br>';
    }
    function __destruct()
    {
        echo 'Pessoa diz: Tchau!! <br>'; // __destruct: deleta o metodo, apagar, destroe 
    }

    public function execução()
    {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}
class Usuario extends Pessoa
{
    public $login;

    function __construct($nome, $idade, $login)
    {
        //$this->nome = $nome;
        //$this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo 'Usuário criado! <br>';
    }
    function __destruct()
    {
        echo 'Usuário diz: Tchau!! <br>'; // __destruct: deleta o metodo, apagar, destroe
        parent::__destruct();
    }
    public function execução()
    {
        echo "@{$this->login}:";
        parent::execução(); // parente chama a função atraves de herença, um parente em tradução livre
    }
}

$usuário1 = new Usuario('Diego Souza', 19, 'diego_souza');
$usuário1->execução();
unset($usuário1);
