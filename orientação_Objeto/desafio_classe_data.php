<div class="titulo">Desafio Classe data</div>

<?php

class data{
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;

    public function dataFuncional(){
        return "A data atual é: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data1 = new data();
$data1->dia = date('d'); // d referece ao dia
$data1->mes = date ('m'); // m referece ao mes
$data1->ano =date ('Y'); // Y maisculo ano com 4 digito, minusculo com 2 digito
echo $data1 -> dataFuncional();