<div class="titulo">Excluir Registros #1</div>

<?php
require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado)
{
    echo "Sucesso :)";
}
else
{
    echo "Erro: " . $conexao->error;
}

$conexao->close();