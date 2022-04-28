<?php
function cumple ($fecha1 , $fecha2)
{
    $calcular = $fecha1 -> diff($fecha2);
    return $calcular->days. " dias" . " para el cumple de mi amor ❤️" ;
}
$fecha1 = new DateTime("2022-04-26");
$fecha2 = new DateTime("2022-06-13");

echo cumple($fecha1 , $fecha2 );

?>

