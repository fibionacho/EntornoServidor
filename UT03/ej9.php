<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ 9</title>
</head>
<body>

<!--Crea una función que reciba dos variables cualesquiera e intercambie su valor.
 Las variables tendrá ese valor fuera de la función. 
PRUEBA: Crea una web en la que se muestre cómo se comporta esta función con variables de distinto tipo-->
    <?php
    $var1="Hola";
    $var2=5;
    
    function intercabiarValor(&$var1,&$var2){
        
        $aux="";
        $aux=$var1;
        $var1=$var2;
        $var2=$aux;
        echo("$var1 y $var2");

    }
    intercabiarValor($var1,$var2);
    
    echo("$var1 y $var2");
    ?>
</body>
</html>