<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
<!--[15 min] Crea una función que sume todos los números entre dos parámetros dados: inicio y fin. PRUEBAS: 
Escribe una web que llame a la función 10 veces con números aleatorios entre 0 y 20.---->

<?php
    function suma($n,$m){
        if($n>$m){
            $aux=$m;
            $m=$n;
            $n=$aux;
        }
        for($i=$n;$i<=$m;$i++){
            $acc+=$i;
        }
        return $acc;
    }

for($j=0;$j<=10;$j++){
    
    echo suma(mt_rand(0,20),mt_rand(0,20))." <br> ";
}


?>

</body>
</html>