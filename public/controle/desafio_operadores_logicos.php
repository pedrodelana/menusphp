<div class="titulo">Desafio de Operadores Lógicos</div>

<style>
    select, button {font-size: 1.8rem; border-radius: 15px;margin-top: 15px;}
    button {background-color: #1867c0;color:white;
        box-shadow: 5px 5px 5px grey;}
</style>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php
if (isset($_POST['t1']) && isset($_POST['t2'])) {
    
    $t1 = !!$_POST['t1']; 
    $t2 = !!$_POST['t2']; 
    
    
    echo '<br>';
    
    if($t1 && $t2){
        echo 'Iremos ao shopping para comprar uma televisão 
        de 50 polegadas e tomaremos sorvete.';
    } elseif($t1 XOR $t2) {
        echo 'Iremos ao shopping para comprar uma televisão 
        de 32 polegadas e tomaremos sorvete.';
    } else {
        echo "Ficaremos em casa!";
    }
}
