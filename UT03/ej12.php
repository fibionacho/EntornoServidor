<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 12</title>
    <link rel="stylesheet" href="ej12.css"/>
</head>
<body>
    <!-- Crea una función que reciba un array con información de un usuario 
    y escriba un formulario relleno. En este caso solo utiliza campos de texto o enteros-->
<?php


$yo = [
    "nombre" => "Nacho Bize Font",
    "dirección" => "Calle falsa número 1234",
    "teléfono" => "91 123 45 67",
    "población" => "Madrid",
    "edad" => 27,
];


function rellenarForm($datos){?>
    <form id="datosPersonales" action="ej12.php">
    <?php foreach($datos as $key => $values){
             if(gettype($values)=="string"){?>

                 <label for=<?=$key?>><?=$key?></label> <br>
                <input name=<?=$key?> value=<?=$values?> type="text"></input>
                 <br>
             <?php
            }elseif(gettype($values)=="integer"){?>

                <label for=<?=$key?>><?=$key?></label> <br>
                <input  label=<?=$key?> name=<?=$key?> value=<?=$values?> type="number"></input> <br>
 <?php }
    }
        ?>
        </form>
    <?php 
} 
    
    rellenarForm($yo);
    ?>



</body>
</html>