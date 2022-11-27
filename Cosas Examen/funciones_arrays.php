<?php
/*FUNCIONES DE ARRAYS
            ARRAY_WALK
array_walk(array|object &$array, callable $callback, mixed $arg = null): bool

Applies the user-defined callback function to each element of the array array.


*/

//EL ARRAY
$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];

//LA FUNCION CALLBACK QUE SE APLICA A TODOS LOS VALORES DEL ARRAY

function mister($valor,$clave){
    
    if($valor[1]==0){
        echo "Sra " .$valor[0]."\n";
    }else echo "Sr " .$valor[0]."\n";
}
/*APLICAR EL ARRAYWALK. SI EL VALOR[1]=1 QUE SE LLAME SEÑOR, SI VALOR[1]=0, SEÑORA */

$presentacion=array_walk($personas, 'mister');
?>