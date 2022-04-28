<?php
$menu = array(
"plato1" => "arepa",
"conmensales" => 2,
"ingredientes" => [
    "1" => "harina" 

]

);
echo ($menu["plato1"]);
echo "</br>";
echo($menu["conmensales"]);
echo "</br>";
echo "</br>";
echo($menu["ingredientes"]);
?>



<?php
$dado1    = array(1,2,3,4,5,6);
$dado2    = array(1,2,3,4,5,6);
$resultado = array_merge($dado1, $dado2);
print_r($resultado);
?>