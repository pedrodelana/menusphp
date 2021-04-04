<?php

function novaConexao($banco = 'curso_php') 
{
    $servidor = 'mysql';
    $usuario = 'root';
    $senha = '12345';

    try
    {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        return $conexao;
    }
    catch(PDOException $e)
    {
            die('Erro: ' . $e->getMessage());
    }
}

novaConexao();