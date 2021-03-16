<div class="titulo">Desafio erros</div>

<?php
interface Template {
    public function metodo1();
    public function metodo2 ($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    public function metodo1() {

    }

    public function metodo2($parametro) {
        echo "Metodo 2 sendo implementado com parametro $parametro";
    }
}

$exemplo = new Classe();
$exemplo->metodo3();