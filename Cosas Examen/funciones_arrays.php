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







//ARRAY_MAP

 //
    // Aplica la retrollamada a los elementos de los arrays dados
    // Como array_walk, pero devolviendo un array con valores modificados

    $a=array(1,2,3,4,5);
    
    //FUNCIÓN NORMAL
    function cuadrado($valor){
        return($valor*$valor);
    }    
    print_r(array_map("cuadrado",$a));


    //FUNCIÓN ANÓNIMA (MEJOR)
    print_r(array_map(function($valor){
        return($valor*$valor);
    }, $a));




      // === ARRAY_FILTER ===
    // Filtra elementos de un array usando una función de devolución de llamada

    $personas = [
        ['Jorge', 1],
        ['Bea', 0],
        ['Paco', 1],
        ['Amparo', 0],
    ];

    //Con el array de personas anterior, utiliza el array_filter para sacar un listado de Hombre y otro listado de mujeres.
    function hombres($var){ //filtramos hombres
        return ($var[1] == 1);
    };
    function mujeres($var){ //filtramos mujeres
        return !($var[1] == 1);
    };
    //volcamos los resultados en 2 arrays
    $listaHombres = array_filter($personas, "hombres");
    $listaMujeres = array_filter($personas, "mujeres");

    

    // OTRO EJEMPLO, PARES E IMPARES
    // Función: array_filter En una lista de digitos del 1 al 20, filtrar y mostrar las posiciones de los números pares e impares.
    function generarArray10($longitud){
        for ($i=0; $i < $longitud; $i++) { $arr[$i] = rand(1, 100); }
        
        return $arr;
    }

    //ARRAY ORIGINAL
    $array10 = generarArray10(20);

    //FILTRO
    function filtrarPares($input){return ($input %2 == 0);}
    function filtrarImpares($input){return ($input % 2 != 0);}
    $impares10 = array_filter($array10, "filtrarImpares");     
    $pares10 = array_filter($array10, "filtrarPares");

    //RE-INDEXADO
    $impares10 = array_values($impares10);
    $pares10 = array_values($pares10);







     // === ARRAY_REDUCE ===
    //Reduce iterativamente un array a un solo valor usando una función llamada de retorno
    //Ej: suma todos los elementos de un array, convierte en string los elementos de un array, etc.

    $a = [1, 2, 3, 4, 5];

    //FUNCIÓN NORMAL
    function suma($aux, $elemento){
        $aux += $elemento;
        return $aux;
    }
    print_r(array_reduce($a, "suma")); // int(15)
    echo "<br>";



    //FUNCIÓN ANÓNIMA
    print_r(array_reduce($a, function($aux, $elemento){
        $aux += $elemento;
        return $aux;
    })); // int(15)
    echo "<br>";

    print_r(array_reduce($a, function($aux, $elemento){
        return $aux."-".$elemento;
    })); // int(15)

?>