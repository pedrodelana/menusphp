<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>';
var_dump($lista);

$texto = "Esse é um texto teste.";

echo '<br>' . $texto[0];
echo '<br>' . $texto[11];
echo '<br>' . $texto[6];
echo '<br>' . mb_substr($texto, 10, 1);

