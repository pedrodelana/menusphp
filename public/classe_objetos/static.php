<div class="titulo">Membro Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variavel de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        //Tentativa 1
        //echo "Estática = {$this->static}<br>";
        //Tentativa 2
        //echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        //echo "Não estático = {$this->naoStatic}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
//$objetoA->mostrarStaticA();
echo A::$static . '<br>';
A::mostrarStaticA();

A::$static = 'Alterado membro de classe.';
echo A::$static . '<br>';