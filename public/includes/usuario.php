<?php
require('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo 'Usuário criado!<br>';
    }

    function __destruct()
    {
        echo 'Usuário tchau!';
    }

    public function apresentar()
    {
        echo "@{$this->login}: {$this->nome}, {$this->idade} anos. <br>";
        parent::apresentar();
    }
}