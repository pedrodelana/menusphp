<div class="titulo">Desafio FOR</div>
<?php
for($i = 0; $i<5; $i++){
    $h = $h . "#";
    echo "$h <br>";
}

echo "<hr>";


for($j = 0; $j<5; ) {
    $k .= "#";
    $j = strlen($k);
    echo "$k <br>";
}

echo "<hr>";

for ($impressao = '#'; $impressao != '######'; $impressao .= '#') {
    echo "$impressao <br>";
}