<?php namespace Div;
class DivisaoException extends \Exception 
{

}

function intdiv($a, $b)
{
    if($b === 0)
    {
        throw new DivisaoException('Números divididos por zero são nulos.');    
    }
    elseif(!is_integer($a/$b))
    {
        throw new DivisaoException('Não é inteiro!');
    }
    else
    {
        return $a/$b;
    }
}