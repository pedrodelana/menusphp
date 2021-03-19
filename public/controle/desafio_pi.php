<div class="titulo">Desafio Pi</div>

<?php
echo pi();
$pi = 3.14;
if ($pi == number_format(pi(), 2)){
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

echo '<br>Fim!';