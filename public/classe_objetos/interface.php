<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Canino extends Animal {
    function latir(): string;
}

class Cachorro implements Canino {
    function respirar()
    {
        return "Irei usar oxigênio. <br>";
    }

    function latir(): string
    {
        return 'au au. <br>';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar();
echo $animal1->latir();

echo 'Fim!';