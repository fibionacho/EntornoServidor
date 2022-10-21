<?php
class Cochegrua extends Coche
{
    private $cocheCargado;

   
    public function getCocheCargado():Coche
    {
        return $this->cocheCargado;
    }


    public function setCocheCargado(Coche $coche)
    {
        $this->cocheCargado = $coche;
    }

    public function cargar($coche)
    {
        $this->cocheCargado=$coche;
    }
    public function descargar(){
        $this->cocheCargado=null;
    }

    public function toString()
    {
        if($this->cocheCargado==null){
            return parent::toString();
        }else{
            return parent::toString()." y carga un coche ".$this->cocheCargado->toString();
        }
    }
}
?>