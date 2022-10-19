<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ 10</title>
</head>
<body>
    <!--
        Crea una función que genera un array aleatorio con parámetros variables

    Por defecto generará 10 valores entre 0 y 10
    Puedes especificar el número de valores como primer parámetro,
    Puedes especificar el valor máximo como segundo parámetro
    o Puedes especificar número de valores, máximo y mínimo

    -->

    <?php 
        function generarArray($numValores=10,$max=0,$min=0){
            $numValores;
            $max;
            $min;
        $array;
        for ($i=0; $i <= $numValores; $i++) { 
            $array[$i]=mt_rand($min,$max);
        }
             return $array;
    }

    print_r(generarArray());
    print_r(generarArray(7,5,4));

?>

</body>
</html>