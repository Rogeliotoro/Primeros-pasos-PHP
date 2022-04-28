<?php
class Calculadora
{
    public $numero1;
    public $numero2;

    function calculadora($numero1, $numero2)
    {
        $this->numerouno = $numero1;
        $this->numerodos = $numero2;
    }
    function suma()
    {
        $resultadoSuma = $this->numero1 + $this->numero2." "."esto es una suma";
        return $resultadoSuma;
    }
    function resta()
    {
        $resultadoResta= $this->numero1 - $this->numero2." "."esto es una resta";
        return $resultadoResta;
    }
    function multiplicar()
    {
        $resultadoMultiplicar= $this->numero1 * $this->numero2." "."esto es una multiplicacion";
        return $resultadoMultiplicar;
    }
    function dividir()
    {
        $resultadoDividir= $this->numero1 / $this->numero2." "."esto es una division";
        return $resultadoDividir;
    }
}
