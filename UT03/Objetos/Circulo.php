<?php
class Circulo 
{
 private  $radio;
 private const pi=M_PI;
    
public function setRadio($radio){
    
    $this->radio=$radio;
}

function getRadio(){
    return $this->radio;
}

function getArea(){
    $area= self::pi *$this->radio * $this->radio;
    return $area;
}

}


?>