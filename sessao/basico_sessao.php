<div class="titulo">Sessão #01</div>

<?php
// criação da sessao
error_reporting(E_ERROR);
// uma sessão o primiera senteça tem que ser session_start()
session_start();

print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']){
 $_SESSION['nome'] = 'Gabriel';
}

if (!$_SESSION['email']){
 $_SESSION['email'] = 'gabriel@azmail.co,';
}

print_r($_SESSION);

?>

<p>
<a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>