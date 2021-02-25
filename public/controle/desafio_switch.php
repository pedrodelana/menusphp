<div class="titulo">Desafio Switch</div>

<style>
    form * {
        font-size:1.8rem;
    }
</style>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="metro-km">Metros > Km</option>
        <option value="c-f">Celsius > Fahrenheit</option>
        <option value="f-c">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<?php
$numeroFornecido = floatval($_POST['param']);
$conversao = $_POST['conversao'];

switch ($conversao) {
    case 'km-milha':
        $resultado = number_format($numeroFornecido * 0.621371,2,".",",");
        $unidadeMedida = 'Milhas.';
        echo "$numeroFornecido Km = $resultado $unidadeMedida";
        break;
    
    case 'milha-km':
        $resultado = number_format($numeroFornecido * 1.60934,2,".",",");
        $unidadeMedida = 'Km.';
        echo "$numeroFornecido Milhas = $resultado $unidadeMedida";
        break;

    case 'km-metro':
        $resultado = $numeroFornecido * 1000;
        $unidadeMedida = 'm.';
        echo "$numeroFornecido Km = $resultado $unidadeMedida";
        break;
    case 'metro-km':
        $resultado = $numeroFornecido / 1000;
        $unidadeMedida = 'Km.';
        echo "$numeroFornecido m = $resultado $unidadeMedida";
        break;
    case 'c-f':
        $resultado = number_format(($numeroFornecido * 1.8) + 32,2,".",",");
        $unidadeMedida = 'Fahrenheit.';
        echo "$numeroFornecido Celsius = $resultado $unidadeMedida";
        break;
    case 'f-c':
    $resultado = number_format(($numeroFornecido - 32) / 1.8,2,".",",");
    $unidadeMedida = 'Celsius.';
    echo "$numeroFornecido Fahrenheit = $resultado $unidadeMedida";
    break;    
    default:
        echo 'Nenhum valor calculado.';
        break;
}

