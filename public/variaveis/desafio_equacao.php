<div class="titulo">Desafio Equação</div>

<?php
$equa1 = (6 * (3 + 2)) ** 2;
$div1 = 3 * 2;
$equa2 = (1 - 5) * (2 - 7);
$div2 = 2;
$divfinal = 10 ** 3;
$resultado = (($equa1 / $div1 - ($equa2 / $div2) ** 2) ** 3) / $divfinal;

echo 'O resultado é ' . $resultado;
