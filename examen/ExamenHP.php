<?php
namespace Ejercicios;
class ExamenHP extends AExamen implements IExamen{
    function obtenerNota(): int
    {
        $min=4;
        $max=5;
       return(mt_rand($min,$max));
    }
}

?>