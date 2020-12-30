<?php

function novaConexao($banco = 'cadastro_cliente')
{
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "root";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    if ($conexao->connect_error) {
        // connect_error : se aparece e pq a conexão com banco de dados não foi feita corretamente
        die('Erro:' . $conexao->connect_error);
        // die: linha acima trata  o erro de conexão com banco de dados
    }
    return $conexao;
}
