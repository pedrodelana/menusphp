<div class="titulo">Operadores Lógicos</div>

<style>
    p {margin-bottom: 0px; font-weight: bold;}
    hr {margin-top: 0px;}
</style>

<?php
echo "<p>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
var_dump(true && 3>2 && 7 <=7);
var_dump(true && 3>2 && 7 > 7);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true OR true);
var_dump(true OR false);
var_dump(false OR true);
var_dump(false OR false);

echo "<p>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";
var_dump(true XOR true);
var_dump(true XOR false);
var_dump(false XOR true);
var_dump(false XOR false);

echo "<p class='divisao'>EXEMPLO</p><hr>";
$idade = 65;
$sexo = 'M';

$criterioHomem = ($idade >=65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$pagouPrevidencia = true;

$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

if ($podeSeAposentar) {
    echo 'Pode se aposentar';
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}