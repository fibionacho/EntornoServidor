<?php

trait setDescripcion
{
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

    }
}

trait getDescripcion
{
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
}


trait localizacion
{
    private $ejeX;
    private $ejeY;
    
    public function getEjeY()
    {
        return $this->ejeY;
    }

    public function setEjeY($ejeY)
    {
        $this->ejeY = $ejeY;

        return $this;
    }

  
    public function getEjeX()
    {
        return $this->ejeX;
    }

   
    public function setEjeX($ejeX)
    {
        $this->ejeX = $ejeX;

        return $this;
    }
}

?>