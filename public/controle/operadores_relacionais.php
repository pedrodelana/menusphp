<div class="titulo">Operadores Relacionais</div>

<style>
    p {margin-bottom: 0px;}
    hr {margin-top: 0px;}
</style>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 23);
var_dump(1!=1);

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 75;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <=65){
    echo "Adulto = $idade anos<br>";
} else{
    echo "Terceira Idade = $idade anos!<br>";
}
echo "<p>Spaceship</p><hr>";
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);
