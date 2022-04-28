<?php
require_once ('class/Persona.php');

$persona = new Persona ();
$persona -> nombre = "rogelio";

echo $persona -> nombre;

$persona -> setNombre('david');
echo "</br>";
echo $persona -> nombre;