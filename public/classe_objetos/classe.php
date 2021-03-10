<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    //atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;

$c1->apresentar();
$c2->apresentar();