<?php

function novaConexao($banco = 'curso_php') {
    $servidor = 'mysql';
    $usuario = 'root';
    $senha = '12345';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao->connect_error)
    {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}