<?php
$nombre="circunferencia";
$r=10;
$pi=3.14;
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Practica 5</title>
    <link  rel="stylesheet" href="estilo5.css"/>
    
</head>

<body>
    <table>
   <tr>
        <td id="p1"> <?php echo "el perimetro de la ". $nombre . " de 10 cm de radio es 2* &#928; * r =  " ?></td>
        <td id="r1"> <?php echo 2*$pi*$r ?>   </td>
    </tr>
    <tr>
        <td id="p2"> <?php echo "el area de la ".$nombre . " con 10 cm de radio es &#928; * r"?> <sup><?php echo"2"?></sup></td>
        <td id="r2"> <?php echo $pi*$r*$r ?></td>
    </tr>
   </table>
</body>

</html>