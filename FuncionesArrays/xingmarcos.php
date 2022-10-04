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
function prueba_imprimir($item, $clave){
    echo "Usuario: $clave con clave $item\n";
}


array_walk_recursive($array,'prueba_imprimir');


?>