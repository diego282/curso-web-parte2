<?php
error_reporting(E_ERROR);

require_once "conexão_banco_de_dados.php";
// unsigned: sem sinal

// DDL : Data Definition Lang.
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id int(6) unsigned auto_increment primary key,
    nome varchar(255) not null,
    CPF varchar (255) not null,
    email varchar(255) not null,
    senha varchar(255) not null,
    telefone varchar(255) not null,
    data_de_nascimento DATE,
    rua varchar(255) not null,
    bairro varchar(255) not null,
    numero_casa int
    
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);
if ($resultado){
    echo "Sucesso :)";
}else{
    echo "Erro:" . $conexao->error;
} 
$conexao->close();