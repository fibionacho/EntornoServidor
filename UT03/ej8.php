<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 8</title>
</head>
<body>

<!--Crea una función que genere un array asociativo que
 contenga información de los parámetros. La función irá descubriendo los tipos
gettype, array_key_exists o in_array o isset
-->
    <?php
        function crearArray15(...$varArgs){
            $aux=[];
          
            foreach ($varArgs as  $value) {

                $aux[gettype($value)]+=1;
               
            }
            return $aux;
        }
        print_r( crearArray15("palabra",1,2,"pez",4.8,[1,2,3]));





        foreach ($variable as $key => $value) {
            # code...
        }
    ?>
    
</body>
</html>