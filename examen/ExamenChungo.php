<?php
namespace Ejercicios;
class ExamenChungo extends AExamen implements IExamen{

    function obtenerNota(): int
    {
        $min=0;
        $max=7;
       return(mt_rand($min,$max));
    }
}

?>