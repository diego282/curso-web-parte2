<form action="#" method="post" name="recadastro" id="recadastro" autocomplete="off" >
<input type="hidden" name="CPF" value="<?= $dados['CPF'] ?>">
    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="nome">Nome </label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?= $dados["nome"] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="CPF">CPF </label>
            <input type="text" class="form-control <?= $erros['CPF'] ? 'is-invalid' : '' ?>" id="CPF" name="CPF" placeholder="CPF" value="<?= $dados["CPF"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['CPF'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" id="nascimento" name="nascimento" placeholder=" 00/00/0000" value="<?= $dados["data_de_nascimento"] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" maxlength="15" minlength="15" id="telefone" class="form-control <?= $erros['telefone'] ? 'is-invalid' : '' ?>" placeholder="(00) 00000-0000"value="<?= $dados["telefone"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['telefone'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="endereço">Rua</label>
            <input type="text" class="form-control <?= $erros['rua'] ? 'is-invalid' : '' ?>" id="rua" name="rua" placeholder="rua" value="<?= $dados["rua"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['rua'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="endereço">Bairro</label>
            <input type="text" class="form-control <?= $erros['bairro'] ? 'is-invalid' : '' ?>" id="bairro" name="bairro" placeholder="bairro" value="<?= $dados["bairro"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['bairro'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="endereço">Número</label>
            <input type="text" class="form-control <?= $erros['numero'] ? 'is-invalid' : '' ?>" id="numero" name="numero" placeholder="numero" value="<?= $dados["numero_casa"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['numero'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="E-mail" value="<?= $dados["email"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="Senha">Senha</label>
            <input type="password" class="form-control <?= $erros['Senha'] ? 'is-invalid' : '' ?>" id="senha" name="senha" placeholder="senha" value="<?= $dados["senha"] ?>" >
            <div class="invalid-feedback">
                <?= $erros['senha'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
   
</form>