<?php
namespace Ejercicios;
abstract class AExamen implements IExamen{
    use TieneFecha;
    public $atributo;

    function intentar(string $atributo){
        $this->atributo=$atributo;
    }
     

    
}

?>