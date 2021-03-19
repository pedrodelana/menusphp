<div class="titulo">Desafio Impressão</div>

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

foreach ($array as $indice => $valor) {
    for(; $indice % 2 === 0; $indice++) {
        echo "$valor <br>";
    }
}