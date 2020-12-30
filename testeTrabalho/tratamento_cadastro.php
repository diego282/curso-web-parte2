<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>

<?php

error_reporting(E_ERROR);
$erros = [];
if (count($_POST) > 0) {

    // isset($_POST['nome'])
    if (!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome é obrigatório';
    }
    if (!filter_input(INPUT_POST, "CPF")) {
        $erros['CPF'] = 'CPF é obrigatório';
    }

    if (!filter_input(INPUT_POST, "bairro")) {
        $erros['bairro'] = "Bairro é obrigatório";
    }
    if (!filter_input(INPUT_POST, "rua")) {
        $erros['rua'] = "Rua é obrigatório";
    }
    if (!filter_input(INPUT_POST, "numero")) {
        $erros['numero'] = "Número da casa é obrigatório";
    }
    if (!filter_input(INPUT_POST, "telefone")) {
        $erros['telefone'] = "Telefone é obrigatório";
    }
    if (!filter_input(INPUT_POST, "nascimento")) {
        $erros['nascimento'] = "Nascimento é obrigatório";
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Email inválido';
    }
    if (filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat(
            'd/m/Y',
            $_POST['nascimento']
        );
        if (!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa';
        }

    }
}
?>

<?php foreach ($erros as $erro) : ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
    <?= "" // $erro 
    ?>
    <!-- </div> -->
<?php endforeach // esse foreach percorre os erros
?>

<script>
    $('#cadastro').each(function() {
        this.reset();
    })
    $(document).ready(function() {
        $("#telefone").mask("(00) 00000-0000")
    })
    $(document).ready(function() {
        $("#nascimento").mask("00/00/0000")
    })
    $(document).ready(function() {
        $("#CPF").mask("000.000.000-00")
    })

    $('#type').each(function() {
        this.reset();
    })
</script>