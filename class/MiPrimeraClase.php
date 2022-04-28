<?php

class MiprimeraClase {
    public $var = "hola valdemoro";
    public function getVar ()
    {
        echo $this -> var;
    }
}

$class = new MiprimeraClase ();
echo $class->var;