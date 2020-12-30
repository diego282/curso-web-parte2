<?php
// alteração de sessao
session_start(); // inicia a sessão
print_r($_SESSION);
?>
<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<?php
$_SESSION['email'] = 'gabrielfilho_alterado@emailaz.com.br';
?>

<p>
<a href="basico_sessao.php">Voltar</a>
</p>

<p>
<a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>