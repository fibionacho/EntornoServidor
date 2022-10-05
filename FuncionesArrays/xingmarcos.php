<?php

/* 3 Xing , Marcos
Funciones: array_replace, array_walk_recursive.
Enunciado: Crear una array bidimesional que guarda nombre de usuario y contraseña de usuario
con array_walk_recursive ejecuta una funcion predefinida mostrando nombre de usuario y contraseña,
 despues con boton cambiar constraseña puede hace cambia de contraseña usando array_replace.*/


$array=[
    "Arturo"=>"daw1",
    "Nacho"=>"daw2",
    "Dani"=>"daw3",
    "Alex"=>"daw4"
];

$nueva_psswd=["Arturo"=>"Nuevadaw1"];

/*funcion predefinida para que imprima usuarios y contraseña */
function prueba_imprimir($item, $clave){
    echo "Usuario: $clave con clave $item\n";
}


array_walk_recursive($array,'prueba_imprimir');
/*si printeas la funcion, el replace se mantiene
si aplicas el w_r, printea el array original*/
print_r(array_replace($array,$nueva_psswd));
array_walk_recursive($array,'prueba_imprimir');

?>