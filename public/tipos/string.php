<div class="titulo">String</div>

<?php
echo 'Eu sou uma String', '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "Nós também" . ' somos';
echo '<br>', "Também aceito", " virgulas";

echo "<br>";
echo "'Teste' " . '"Teste" ';

echo "<br>";
echo '\'Teste\' ' . "\"Teste\" ";

print("<br>Também existe a função print");
print"<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('Só a primeira letra');
echo '<br>' . ucwords('Todas as letras iniciáis');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'Troca isso isso');
