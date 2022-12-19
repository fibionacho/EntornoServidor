<?php
namespace Ejercicios;
trait TieneFecha
{
    private $fecha;

    public function getFecha():string{
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
}

?>