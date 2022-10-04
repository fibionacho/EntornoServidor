<?php
    function crear_piramide ($filas) {
        $cadena = null;
        for ($i = 1; $i <= $filas; $i++) {
            for ($h = $i; $h <= $i; $h++) {
                $cadena .= "*";
            }
            echo $cadena."<br />";
        }
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Practica 8</title>
</head>

<body>
    <div align="center">
   <?php crear_piramide(10)?>
</div>
</body>

</html>