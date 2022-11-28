<?php
/*Función: array_rand

array_rand(array $array, int $num = 1): mixed
array: El array de entrada.
num: Especifica cuántas entradas deberían seleccionarse.

Dados dos arrays unidimensionales, uno de tareas[] y otro de personas[], 
asigna de manera aleatoria una tarea a cada persona. Si ya le echas valor, 
crea un arraybidimensional de tareas_diarias[dia][tarea] y haz un organigrama 
donde asignes tareas a cada persona durante la semana
*/


$tareas=[
    "Comprar","Fregar","Cocinar","Barrer","Poner lavadora","Tender la ropa"
];

$personas=["Nacho","Arturo","Dani","Alex"];




for($i=0;$i<count($personas);$i++){
    $asignar_tarea=array_rand($tareas, 1);
    echo "$personas[$i] tiene asignada la tarea ".$tareas[$asignar_tarea]."\n";
            
}





?>