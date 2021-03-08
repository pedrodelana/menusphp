<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo ($nome) {
    $inverter = strrev($nome);
    if ($nome === $inverter) {
        return "A palavra $nome é um palindromo!";
    } else {
        return "A palavra $nome e $inverter não são palindromos!";
    }
}

echo palindromo('caio');