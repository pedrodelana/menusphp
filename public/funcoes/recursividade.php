<div class="titulo">Recursividade</div>

<?php
function fatorial ($a) {
    $resultado = $a;
    for (; $a > 1; $a--) {
        $resultado = $resultado * ($a - 1);
    }
    return $resultado;
}

echo fatorial(5);
echo '<br>';

function somaUmAte ($a) {
    $resultado = $a;
    for (; $a > 0; $a--) {
        $resultado = $resultado + ($a - 1);
    }
    return $resultado;
}

echo somaUmAte(5);
echo '<br>';

function somaRecursivaUmAte ($numero) {
    if ($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}
echo somaRecursivaUmAte(5);
