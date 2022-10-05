<?php
/*Dados estos arrays consigue que el resultado sea rojo, verde, naranja, azul usando la funcion array_merge*/
$a1=array("a"=>"rojo");
$a2=array("b"=>"añil", "c"=>"violeta");
$a3=array("d"=>"verde","f"=>"naranja");
$a4=array("i"=>"azul");
$a5=array("g"=>"azul", "h"=>"blanco");


$arr6=array_merge($a1,$a3,$a4);
print_r($arr6);
?>