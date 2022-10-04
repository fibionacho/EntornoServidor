<?php

/*$comida = [

         0 => ["Banana", 3, 56],

    1 => ["Chuleta", 1, 256]

    2 => ["Pan", 1, 90]

    ]
    
Utiliza la función map_reduce para calcular la cantidad de calorías de la comida anterior.

*/


$comida=[
    0=>["Banana",3,56],
    1=>["Chuleta",1,256],
    2=>["Pan",1,90]
];

/*Pasamos los valores de la multiplicacion de uds x calorias a nuevo array */
$cal=[];
for($i=0; $i<count($comida);$i++){
    $cal[$i]=$comida[$i][1]*$comida[$i][2];
}
for($i=0;$i<count($cal);$i++){
echo $cal[$i];
}

/*funcion callback para sumar los valores de $cal*/
function sumCal($carry,$item){
    $carry+=$item;
    return $carry;
}
var_dump(array_reduce($cal,"sumCal"));
?>