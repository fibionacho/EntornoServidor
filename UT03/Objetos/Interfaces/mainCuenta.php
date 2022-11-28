<?php
require("CuentaBancaria.php");

$milloneti = new CuentaBancaria("Milloneti",1000000);
$agapito = new CuentaBancaria("Agapito",30345);
$pobreton = new CuentaBancaria("Pobreton", -10000);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        echo $milloneti->mostrar();
        echo "<br>";
        echo $agapito->mostrar(); 
        echo "<br>";
        echo $pobreton->mostrar();   

        for($i=0;$i<100;$i++)
        {
            $milloneti->retirar(100);
        }
        echo "<br>";
        echo $milloneti->mostrar();


    ?>
  
</body>
</html>