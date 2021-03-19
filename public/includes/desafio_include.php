<div class="titulo">Desafio Include</div>

<?php
include_once('usuario.php');

$usuario1 = new Usuario('Pedro', 28, 'pedrolana');
$usuario1->apresentar();
unset($usuario1);