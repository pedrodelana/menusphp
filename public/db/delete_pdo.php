<div class="titulo">PDO: Excluir</div>
<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "DELETE FROM cadastro WHERE id = ?";

$stmt = $conexao->prepare($sql);


if($stmt->execute([9]))
{
    echo "Sucesso :)";
}
else
{
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

