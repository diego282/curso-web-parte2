<?php
error_reporting(E_ERROR);
$sucesso = false; 
if ($_POST && !count($erros)) {
    require_once "conexão_banco_de_dados.php";

    $sql = "INSERT INTO cadastro 
    (nome, CPF, email, senha, telefone, data_de_nascimento, rua, bairro, numero_casa)

     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $conexao = novaConexao();
    $stmt = $conexao->prepare($sql);

    $params = [ // aqui joga os dados do formulario em um array
        $_POST['nome'],
        $_POST['CPF'],
        $_POST['email'],
        $_POST['senha'],
        $_POST['telefone'],
        $data ? $data->format('Y-m-d') : null, // mudamos a data para formato sql
        $_POST['rua'],
        $_POST['bairro'],
        $_POST['numero'],
    ];


    $stmt->bind_param("ssssssssi", ...$params); // aqui passa as classe das variaveis

    if ($stmt->execute()) { // aqui executa e faz a inserção
        unset($_POST);
        $sucesso = true;
    }
    
}

