<div class="titulo">Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];