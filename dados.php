<?php

function dados ($numeros)
{
    $valorNumero =0;
    for($i = 0 ; $i > $valorNumero ; $i ++)
    {
        $valorNumero += rand(1,6);
    }
    return $valorNumero;
}

?>
