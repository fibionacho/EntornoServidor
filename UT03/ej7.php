<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej7
    </title>
</head>
<body>
    <!--[15 min] Crea una función que concatene todas las cadenas pasadas como 
    parámetro utilizando el primer parámetro como seprador. 
    PRUEBAS: Escribe una web que llame a la función 3 veces con cadenas.-->


<?php 
        function concatenar3($separador,...$texto){
            $nuevaString="";
            for($i=0;$i<count($texto);$i++){
                $nuevaString.=$separador.$texto[$i];
            }
            return $nuevaString;
        }
        echo concatenar3(".","Hola","que","tal","soy");
?>

</body>
</html>