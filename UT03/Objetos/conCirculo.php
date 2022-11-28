<?php
require ("circulo.php");

$miCirculo= new Circulo();

$miCirculo->setRadio(13);


echo $miCirculo->getArea();


?>