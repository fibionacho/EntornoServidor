<?php
    class Objeto{
        private $peso;
        private $descripcion;
        use setDescripcion, getDescripcion, localizacion;

      
        public function getPeso():int
        {
                return $this->peso;
        }

      
        public function setPeso($peso)
        {
                $this->peso = $peso;


        }
    }
?>