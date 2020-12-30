<div class="titulo">Try & Cacth</div>

<?php
// echo 7 / 0;
// echo intdiv(7, 0);

try { // quando usa try obrigatoriamente tem que ter um catch
    echo intdiv(7, 0);
} catch(Error $e) { // tem que define o tipo, nesse casso e Error
    // Error e usado em caso mais fatais
    echo 'Teve um erro aqui<br>';
}

try {
    throw new Exception('Um erro muito estranho');
    // throw: ele lancar a exceção , deve instanciar atraves de new
    // Exception: e quando ocorre uma exceção, uma quebra de regra
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) { // DivisionByZeroError: quando está dividindo por 0
    echo 'Divisão por zero<br>';
} catch(Throwable $e) {
    // Throwable: tanto error com excention e tratada
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Execução continua... <br>';