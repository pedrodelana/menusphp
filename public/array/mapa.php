<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor"=> "verde",
    "peso" => 49.8
);

print_r($dados);

echo '<br>' . $dados["idade"];
echo '<br>';

$lista[] = 'zero';
echo '<br>' . $lista[0];
$lista[] = 'um';
echo '<br>' . $lista[1];

echo '<br>' ;
print_r($lista);
