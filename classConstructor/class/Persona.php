<?php
class Persona
{
    public $nombre;
    public $apellido;
    public $edad;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nuevoNombre)
    {
        $lowerNombre = strtolower($nuevoNombre);
        $this->nombre = $lowerNombre;
    }
    //////////////////////////
    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($nuevoApellido)
    {
        $lowerApellido = strtolower($nuevoApellido);
        $this->apellido = $lowerApellido;
    }

    ////////////////////////////////
    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($nuevoEdad)
    {
        $this->edad = $nuevoEdad;
    }
}
