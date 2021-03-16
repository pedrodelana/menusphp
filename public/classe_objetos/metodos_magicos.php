<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'E morreu!';
    }

    function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "br";
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declarado: $atrib <br>";
    }

    function __set($atrib, $valor)
    {
        echo "Alterando atributo não declarado: {$atrib}/{$valor} ";
    }

    public function __call($metodo, $params)
    {
        echo "Tentando executar método ${metodo}";
        echo ", com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); //__construct
//$pessoa->apresentar(); // chamando o __toString
//echo $pessoa, '<br>'; // chamando o __toString
//$pessoa->nome = 'Reinaldo'; 
$pessoa->nomeCompleto = 'Muito Legal!!!'; // __set
//$pessoa->nomeCompleto; //__get
echo '<br>';
echo $pessoa->nome; // acessa o atributo diretamente sem __get
$pessoa->exec(1, 'teste', true, [1, 2, 3]); // __call
$pessoa = NULL; //__destruct