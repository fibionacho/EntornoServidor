<?php

require("Coche.php");
require("Cocheconremolque.php");
require("Cochegrua.php");

$arrCoche=[];

$c1= new Coche();
$c1->setMatricula("1000");
$c1->setMarca("BMW");
$c1->setCarga(30);

$c2= new Cocheconremolque();
$c2->setMatricula("1001");
$c2->setMarca("Renault");
$c2->setCarga(30);
$c2->setCapacidadRemolque(200);

$c3= new Coche();
$c3->setMatricula("1002");
$c3->setMarca("Porsche");
$c3->setCarga(40);

$c4=new Cochegrua();
$c4->setMatricula("1003");
$c4->setMarca("Renault");
$c4->setCarga(20);


$c4->setCocheCargado($c2);

$arr=[$c1,$c3,$c4];






?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coche</title>
</head>
<body>
    
 
 
 <?php
    array_walk($arr,function ($valor){
        echo $valor->toString()."<br>";
    });
    ?>


</body>
</html>