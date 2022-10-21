<?php

class Cocheconremolque extends Coche
{
   private $capacidadRemolque;


   public function getCapacidadRemolque()
   {
      return $this->capacidadRemolque;
   }

   public function setCapacidadRemolque($capacidadRemolque)
   {
      $this->capacidadRemolque = $capacidadRemolque;
   }

public function toString()
{
   return parent::toString()." remolque ". $this->capacidadRemolque;
}

}


?>