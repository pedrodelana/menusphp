<div class="titulo">Excluir Registros #2</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
require_once "conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($_GET['excluir']) 
{
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$registros = [];

if($resultado->num_rows > 0)
{
    while($row = $resultado->fetch_assoc())
    {
        $registros[] = $row;
    }
}
elseif($conexao->error)
{
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

<table class="table table-hover table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>            
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>               
                <td><a href="exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id']?>" 
                class="btn btn-danger">
                    Excluir
                </a></td>               
            </tr>
        <?php endforeach ?> 
    </tbody>
</table>

<style>
    table *{
        font-size: 1.2rem;
    }
</style>