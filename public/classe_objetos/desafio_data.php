<div class="titulo">Desafio Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    function apresentar() {
        echo "{$this->dia}/{$this->mes}/{$this->ano}<br>";
    }
}

$d1 = new Data();
$d1->apresentar();

$d2 = new Data();
$d2->dia = 9;
$d2->mes = 10;
$d2->ano = 1992;
$d2->apresentar();