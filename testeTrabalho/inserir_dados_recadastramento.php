<?php

if (!count($erros)) {
    $sql = "UPDATE cadastro 
    SET nome = ?, email = ?, senha = ?, telefone = ?, data_de_nascimento = ?,
    rua = ?, bairro = ?, numero_casa = ?
    WHERE CPF = ?";

    $stmt = $conexao->prepare($sql);

    $params = [
       $_POST['nome'],
       $_POST['email'],
       $_POST['senha'],
       $_POST['telefone'],
        $data ? $data->format('Y-m-d') : null, // mudamos a data para formato sql
       $_POST['rua'],
       $_POST['bairro'],
       $_POST['numero'],
       $_POST['CPF'],
    ];

    $stmt->bind_param("sssssssis", ...$params); // aqui passa as classe das variaveis

    if ($stmt->execute()) { // aqui executa e faz a inserção
        unset($_POST);
        $sucesso = true;
    }
}