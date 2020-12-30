<?php
session_start();
session_destroy();
// começa a apagar os cookies
unset($_COOKIE['usuario']);
setcookie('usuario', ''); //setcookie: limpa o cookie
// termina a limpeza dos cookes
header('Location: login.php');