<?php 
error_reporting(E_ERROR);
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

// nosso "banco de dados" comeca aq, aonde email e senhas validas ficam armazenada
if($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "1234567",
        ],
        [
            "nome" => "Outro Aluno",
            "email" => "outro@email.com.br",
            "senha" => "7654321",
        ],
    ];
    // nosso "banco de dados" termina aq
    
// IMPORTANTE: parte abaixo verifica ser a senha e email informado e valido!
    foreach($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];
// IMPORTANTE: parte acima verifica ser email e senha "estão no banco de dados" e deixar acessar o exercicios
        if($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            // data futura para cookie abaixo
            $exp = time() + 60 * 60 * 24 * 30;
            // chamada do cookie
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php'); // aqui dps de verifica senha e email ser estão corretos redireciona para a pagina dos exercicios
        }
    }
    // aqui começa o tratamento de erro ser o email ou as senha não estiver correto
    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
    // aqui termina o tratamento de erro ser o email ou as senha nãoe stiver correto
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/estilo.css">
    <link rel="stylesheet" href="recursos/login.css">  <?php // aqui referenciou login.css?>
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if ($_SESSION['erros']): ?>
                <div class="erros">
                    <?php foreach ($_SESSION['erros'] as $erro): ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <?php // aqui começa o formulario de login?>
            <form action="#" method="post">
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
            <?php // aqui termina o formulario de login?>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>