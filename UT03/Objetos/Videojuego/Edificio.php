<?php
class Edificio
{
    private $altura;
    private $descripcion;
    use setDescripcion, getDescripcion, localizacion;
  
    public function getAltura():int
    {
        return $this->altura;
    }

   
    public function setAltura($altura)
    {
        $this->altura = $altura;

    }

   
  
}

?>