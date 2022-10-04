<?php

/*
 Jorge (Profe)
Funciones: array_walk, array_map, array_filter, array_reduce

$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];

Utiliza alguna de las funciones para generar un array de cadenas indicando el nombre de la persona 
y cómo tratarle con formalidad. Si el valor entero detrás del nombre es un 1 
Hay que poner "Señor <nombre>", si es 0 hay que poner "Señora <nombre>"

$resultado = ["Señor Jorge", "Señora Bea", "Señor Paco", "Señora Amparo"];

*/ 

$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];

/*el valor es lo que contiene cada clave (Jorge y 0). cuando valor de [1(segunda posicion)]
sea 1 es que es chico */
function mister($valor,$clave){
    
    if($valor[1]==0){
        echo "Sra " .$valor[0]."\n";
    }else echo "Sr " .$valor[0]."\n";
}

$presentacion=array_walk($personas, 'mister');


/*
$frutas = array("d" => "limón", "a" => "naranja", "b" => "banana", "c" => "manzana");

function test_alter(&$elemento1, $clave, $prefijo)
{
    $elemento1 = "$prefijo: $elemento1";
}

function test_print($elemento2, $clave)
{
    echo "$clave. $elemento2<br />\n";
}

echo "Antes ...:\n";
array_walk($frutas, 'test_print');

array_walk($frutas, 'test_alter', 'fruta');
echo "... y después:\n";

array_walk($frutas, 'test_print');


*/

?>