<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej 11</title>
</head>
<body>
<!-- Crea una función que reciba un array con distintos tipos de valores de tal forma que:
    Si son enteros: el primer entero sea elevado al cuadrado, el segundo entero sea elevado al 
    cubo y así sucesivamente con los números enteros.
    Si el valor es un double lo convertirá a su valor negativo (si es negativo al positivo)
    Si es una cadena cambiará las mayúsuclas por minúsculas y viceversa.
    En caso de no estar entre estos valores lo dejará sin modificar.
-->
<?php

    function movidaLoca(...$movidas){
        $aux;
        $cont=2;
        $i=0;
        $array;
        foreach ($movidas as  $value) {
            if(gettype($value)=="integer"){
                $aux=pow($value,$cont);
                $cont++;
                $array[$i]=$aux;
            }elseif (gettype($value)=="double") {
                $aux=$value*-1;
                $array[$i]=$aux;
            }elseif(gettype($value)=="string"){
                    $stringAuxiliar=strtoupper($value);
                    if($stringAuxiliar==$value){
                        $stringAuxiliar=strtolower($value);
                        $array[$i]=$stringAuxiliar;
                    }else{
                        $array[$i]=$stringAuxiliar;
                    }
            }
            $i++;
        }
        return $array;
    }
    
?>
    
</body>
</html>