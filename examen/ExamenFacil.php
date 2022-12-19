<?php
namespace Ejercicios;

    class ExamenFacil extends AExamen implements IExamen{


        function obtenerNota(): int
        {
            $min=5;
            $max=10;
           return(mt_rand($min,$max));
        }

    }

?>