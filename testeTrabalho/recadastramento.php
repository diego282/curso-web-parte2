<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Alterar Registro</div>

<?php
error_reporting(E_ERROR);
require_once "conexão_banco_de_dados.php";
$conexao = novaConexao();

if ($_GET['CPF']) {
    $sql = "SELECT  * FROM cadastro WHERE CPF = ? limit 1";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $_GET['CPF']);
    
    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $dados = $resultado->fetch_assoc();
            if ($dados['data_de_nascimento']) {
                $dt = new DateTime($dados['data_de_nascimento']);
                $dados['data_de_nascimento'] = $dt->format('d/m/Y');
            }
        }
    }
}
require_once "tratamento_cadastro.php";
require_once "inserir_dados_recadastramento.php"; 
?>

<form action="/exercicios.php" method="get" autocomplete="off">
    <input type="hidden" name="dir" value="testeTrabalho">
    <input type="hidden" name="file" value="recadastramento">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="text" name="CPF" class="form-control" value="<?= $_GET['CPF'] ?>" placeholder="Informe o CPF para consulta no formato 000.000.000-00">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">Consultar</button>
        </div>
    </div>
</form>

<?php require_once "formulario_recadastramento.php" ?>
    



