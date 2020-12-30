<?php
error_reporting(E_ERROR);

require_once "conexão_banco_de_dados.php";

$conexao = novaConexao(null);
$sql = "CREATE DATABASE IF NOT EXISTS cadastro_cliente";


$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro:" . $conexao->error;
}
$conexao->close();

