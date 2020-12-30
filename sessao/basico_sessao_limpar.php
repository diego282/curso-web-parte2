<?php
// limpeza da sessão
session_start(); // inicia a sessão
session_destroy(); // destroir a sessão
header('location: basico_sessao.php'); // e como tivesse redirecionando