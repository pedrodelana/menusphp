<div class="titulo">Criar Banco</div>

<?php
require_once "conexao.php";

$conexao = novaConexao(NULL);
$sql = 'CREATE DATABASE curso_php';

$conexao->query($sql);

$conexao->close();