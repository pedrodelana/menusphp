<div class="titulo">Básico de Sessão</div>

<?php
print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) 
{
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email'])
{
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);
echo '<br>';
?>

<p>
<a href="/sessao/basico_sessao_alterar.php">
    Alterar Sessão
</a>
</p>