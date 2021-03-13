<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrar() {
        echo 'não vou imprimir';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();

class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";
    }
}

echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();