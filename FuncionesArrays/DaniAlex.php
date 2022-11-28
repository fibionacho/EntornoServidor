<?php

/* 
Crea un array con 20 números aleatorios. A continuación, ordénalo, quítale la primera mitad 
de los números y pónselos al final. Muestra todos los pasos por pantalla.

Tienes que usar las siguientes funciones

array_slice — Extract a slice of the array
array_push — Push one or more elements onto the end of array
sort — Sorts array in place by values in ascending order.4
rand — Generate a random integer
*/

function rellenarArray(){
    $arr = [];
    for($i=0;$i<20;$i++){
      $arr[$i]=rand(1,10);

    }
    return $arr;
}
$arr=rellenarArray();
print_r($arr);
/*ordenar array*/
sort($arr);
print_r($arr);
/*quitar primera mitad y ponerla al final*/

$arr1=array_slice($arr,0,10,true);
print_r($arr);
for($i=0;$i<10;$i++){
array_push($arr,$arr1[$i]);
}

$arr=array_slice($arr,10,count($arr),true);
print_r($arr);
?>