<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os metodos da documentação string
// qual o metódo que a posição de texto 'abc'
// na string '!AbcaBcabc' retorne 1?

echo stripos('!AbcaBcabc', 'abc'), '<br>';

echo strpos(strtolower('!AbcaBcabc'), 'abc'), '<br>';