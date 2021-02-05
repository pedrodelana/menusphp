<div class="titulo">If e Else</div>

<?php

if (true) {
   echo "Serei impresso?<br>";
   echo "Serei impresso de novo?<br>";
}

if(true){
    echo "Verdadeiro<br>";
} 
else{
    echo "Falso <br>";
}

if(false){
    echo "Passo A<br>";
} elseif (true) {
    echo "Passo B<br>";
} else{
    echo "Ultimo Passo<br>";
}

echo "Fim<br>";