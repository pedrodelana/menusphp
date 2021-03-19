<div class="titulo">Desafio Erro</div>

<?php
require_once('desafio_erro_arquivo.php');

use function \Div\intdiv;
try
{
    $resultado = intdiv(8, 2);
    echo "$resultado<br>";
}
catch(\Div\DivisaoException $e)
{
    echo "Não foi possível dividir.<br>";
    echo "Motivo:  {$e->getMessage()}<br>";
}

echo '<br>';

try
{
    $resultado = intdiv(8, 3);
    echo "$resultado<br>";
}
catch(\Div\DivisaoException $e)
{
    echo "Não foi possível dividir.<br>";
    echo "Motivo:  {$e->getMessage()}<br>";
}

echo '<br>';

try
{
    $resultado = intdiv(8, 0);
    echo "$resultado<br>";
}
catch(\Div\DivisaoException $e)
{
    echo "Não foi possível dividir.<br>";
    echo "Motivo:  {$e->getMessage()}<br>";
}

echo '<br>';

try
{
    $resultado = \intdiv(8, 3);
    echo "$resultado<br>";
}
catch(\Div\DivisaoException $e)
{
    echo "Não foi possível dividir.<br>";
    echo "Motivo:  {$e->getMessage()}<br>";
}