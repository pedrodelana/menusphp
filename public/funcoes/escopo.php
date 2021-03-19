<div class="titulo">Função e Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();

$variavel =1;
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a nova função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());