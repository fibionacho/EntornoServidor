<?php
abstract class Mago implements Personaje
{
    use localizacion;
    function defender()
    {
        echo "Hechizo protector";
    }
     abstract public function atacar();

     
}

class MagoBlanco extends Mago implements Personaje
{

    function atacar()
    {
        echo "Ataque de luz";
    }
}

class MagoOscuro extends Mago implements Personaje
{
    function atacar()
    {
        echo "Ataque de sombra";
    }
}


?>