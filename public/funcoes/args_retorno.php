<div class="titulo">Argumentos e Retorno</div>

<?php
function obterMensagem() {
    return 'Seja Bem Vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>' . obterMensagem();
echo '<br>';

var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem Vindo, {$nome}!";
}

echo '<br>' . obterMensagemComNome('Wagner');
echo '<br>' . obterMensagemComNome('Tiago');

function soma($a, $b) {
   return $a + $b; 
}

$x = 4;
$y = 5;
echo '<br>' . soma($x, $y);
echo '<br>' . soma(45, 78);

function trocarValor ($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>' . $variavel;

function trocarValorDeVerdade (&$a, $novoValor) {
     $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5);
echo '<br>' . $variavel;