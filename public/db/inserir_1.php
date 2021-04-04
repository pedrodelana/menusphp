<div class="titulo">Inserir Registro #1</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro
        (nome, nascimento, email, site, filhos, salario)
        VALUES (
            'Pedro Henrique',
            '1992-10-09',
            'pedroph@gmail.com.br',
            'https://ph.sites.com.br',
            0,
            6000.87
            )";

            $conexao = novaConexao();
            $resultado = $conexao->query($sql);

            if($resultado) 
            {
                echo "Sucesso!";
            }
            else
            {
                echo "Erro: " . $conexao->error;
            }