<div class="titulo">Cadastro</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php // o link acima foi pego da Web, e um link com confugurações CSS de Bootsrap para nosso formulário
?>

<?php
require_once "tratamento_cadastro.php";
require_once "conexão_banco_de_dados.php";
require_once "inserir_dados.php";

if (isset($sucesso) && $sucesso){
    echo '<script> alert("Formulário enviado com sucesso!")</script>';

}
?>

<form action="#" method="post" name="cadastro" id="cadastro" autocomplete="off"  >
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="nome">Nome </label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $_POST["nome"] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="CPF">CPF </label>
            <input type="text" class="form-control <?= $erros['CPF'] ? 'is-invalid' : '' ?>" id="CPF" name="CPF" placeholder="CPF" value="<?= $_POST["CPF"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['CPF'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder=" 00/00/0000" value="<?= $_POST["nascimento"] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" maxlength="15" minlength="15" id="telefone" class="form-control <?= $erros['telefone'] ? 'is-invalid' : '' ?>" placeholder="(00) 00000-0000"value="<?= $_POST["telefone"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['telefone'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="endereço">Rua</label>
            <input type="text" class="form-control <?= $erros['rua'] ? 'is-invalid' : '' ?>" id="rua" name="rua" placeholder="rua" value="<?= $_POST["rua"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['rua'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="endereço">Bairro</label>
            <input type="text" class="form-control <?= $erros['bairro'] ? 'is-invalid' : '' ?>" id="bairro" name="bairro" placeholder="bairro" value="<?= $_POST["bairro"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['bairro'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="endereço">Número</label>
            <input type="text" class="form-control <?= $erros['numero'] ? 'is-invalid' : '' ?>" id="numero" name="numero" placeholder="numero" value="<?= $_POST["numero"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['numero'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $_POST["email"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="Senha">Senha</label>
            <input type="password" class="form-control <?= $erros['Senha'] ? 'is-invalid' : '' ?>" id="senha" name="senha" placeholder="senha" value="<?= $_POST["senha"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['senha'] ?>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
    <a  class="btn btn-primary btn-lg" href='exercicios.php?dir=testeTrabalho&file=recadastramento&CPF='>Recadastramento</a>
</form>
    

</form>

<?php
