<?php
require_once ('class/Calculadora.php');

$calculadora = new Calculadora ();
$calculadora -> numero1 = 8;
$calculadora -> numero2 = 5;

echo $calculadora -> suma();
echo "</br>";
echo $calculadora -> resta();
echo "</br>";
echo $calculadora -> multiplicar();
echo "</br>";
echo $calculadora -> dividir();
