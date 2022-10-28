<?php
class Humano implements Personaje
{
    use localizacion;
    
    function atacar()
    {
        echo "Puñetazo";
    }

    function defender()
    {
        echo "Bloqueo";
    }
}

?>