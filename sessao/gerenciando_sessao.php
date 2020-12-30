<div class="titulo">Gerenciando Sessão</div>

<?php
error_reporting(E_ERROR);
//echo session_id('2r4chf1k115gt24pahcq4sjlpi'); // tanto busca a sessao, como pode dpassa uma sessão para ele
session_start(); // inicia sessão 
echo session_id(); // buscar indereço da sessão

// IMPORTANTE: as tres linhas abaixo pode ser usada para ver quantas pessoas estão dando refresch na(em) sessão
// ser for compartilhada a sessão pode ser ter como a quantidade de usuário no site, mas session compartilhadas não são muitos seguras.
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1; 
echo '<br>' . $_SESSION['contador'];

//IMPORTANTE: nas 2 linhas abaixo: Muda o id do session de tempos em tempos, melhora a segurança
if ($_SESSION['contador'] % 5 === 0){
    session_regenerate_id(); // muda o id de acordo com tempo informado no nosso caso a cada 5 visitas ou refresch
}
if ($_SESSION['contador'] >= 15 ){
    session_destroy(); 
}