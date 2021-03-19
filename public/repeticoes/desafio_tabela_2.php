<div class="titulo">Desafio Tabela #2</div>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

    button {font-size: 1.8rem;margin-top:20px;}
</style>

<form action="#" method="post">
    <p>Criação de Tabelas:</p>
    <div>
        <label for="coluna">Colunas:</label>
        <input type="number" name='coluna'>
    </div>
    <div>
        <label for="linha">Linhas:</label>
        <input type="number" name='linha'>
    </div>

    <button>Executar</button> 
</form>

<?php
$colunas = intval($_POST['coluna']);
$linhas = intval($_POST['linha']);
if(!$linhas) $linhas = 5;
if(!$colunas) $colunas = 5;
?>
<table>
    <?php
        for($i=1;$i <= $linhas; $i++) {
            echo '<tr>';
            for($j=1;$j<=$colunas;$j++) {
                echo "<td>";
                $k = $k +1;
                echo $k;
                echo "</td>";
            }
            echo '</tr>';
        }
    ?>
</table>
