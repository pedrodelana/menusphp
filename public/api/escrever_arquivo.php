<div class="titulo">Escrever arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor Inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, 'Novo Conteudo');
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " com novos valores.\n");
fwrite($arquivo, 'Adicionamos em um segundo momento.');
fclose($arquivo);

ini_set('display_erros', 1);
$arquivo = fopen('teste.txt', 'x');
