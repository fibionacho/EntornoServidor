<?php
class Coche
{
    private $matricula;
    private $marca;
    private $carga;

  //getter php?

//SETTER Y GETTER
  public function setMatricula($matricula)
  {
        $this->matricula=$matricula;
  }

  public function getMatricula():string
  {
    return $this->matricula;
  }  


  public function setMarca($marca)
  {
    $this->marca=$marca;
  }
  public function getMarca():string
  {
    return $this->marca;
  }

  public function setCarga($carga)
  {
    $this->carga=$carga;
  }
  public function getCarga():int
  {
    return $this->carga;
  }

  public function toString()
  {
    return "Coche: ".$this->matricula." , ".$this->marca.", carga ".$this->carga;
  }
  
}
?>