<?php
   // $sopaLetras=inicializarTablero( $tablero, $n, $m);

   $tablero=[];
   

    function inicializarTablero( $tablero, $n, $m){
        for($i=0;$i<$n;$i++){
            for($j=0;$j<$m;$j++){
           $tablero[$i][$j]=chr(rand(ord("a"),ord("z")));
            }
        }
        return $tablero;
    }
 
    
/*Pintar con dos for */
    function pintarTablero($tablero){
        echo "<table>";
        for($i=0;$i<count($tablero);$i++){
            echo "<tr>";
            for($j=0;$j<count($tablero[$i]);$j++){
                echo "<td>".$tablero[$i][$j]."</td>";
            }
            echo "</tr>";    
        }
        echo "</table>";
    }

    /*pintar con forEach */
    function pintarAlternativo($tablero){
        echo "<table>";
        foreach($tablero as $fila){
            echo "<tr>";
            foreach($fila as $valor){
                echo "<td>".$valor."</td>";

            }
            echo "</tr>";
        }
        echo "</table>";
    }


/*AMpersand para que se modifique el valor de tablero */
    function colocarPalabraHorizontal(&$tablero, $palabra){
        $longPalabra=strlen($palabra);
        $maxHorizontal=count($tablero)-$longPalabra;
        $maxVertical=count($tablero[0]);

        $colocaEnX=rand(0,$maxHorizontal);
        $colcaEnY=rand(0,$maxVertical-1);
        for ($i=0; $i <$longPalabra ; $i++) { 
            $tablero[$colcaEnY][$colocaEnX+$i]=substr($palabra,$i,1);
        }
    }
    
    /*Si no quieres modificar el tablero ya hecho, devuelvelo */
    function colocarPalabraVertical($tablero, $palabra){
        $longPalabra=strlen($palabra);
        $maxHorizontal=count($tablero)-$longPalabra;
        $maxVertical=count($tablero[0]);

        $colocaEnX=rand(0,$maxHorizontal);
        $colocaEnY=rand(0,$maxVertical-1);
        for ($i=0; $i <$longPalabra ; $i++) { 
            $tablero[$colocaEnX+$i][$colocaEnY]=substr($palabra,$i,1);
        }
        return $tablero;
    }

    function colocarPalabraHorizontalInvertida($tablero, $palabra){
        $longPalabra=strlen($palabra);
        $maxHorizontal=count($tablero)-$longPalabra;
        $maxVertical=count($tablero[0]);

        $colocaEnX=rand(0,$maxHorizontal);
        $colocaEnY=rand(0,$maxVertical-1);
        for ($i=0; $i < $longPalabra; $i++) { 
            $tablero[$colocaEnY][$colocaEnX+$i]=substr($palabra,$longPalabra-$i-1,1);
        }
        return $tablero;
    }

    function colorarPalabraVerticalINvertida($tablero, $palabra){
        $longPalabra=strlen($palabra);
        $maxHorizontal=count($tablero);
        $maxVertical=count($tablero[0])-$longPalabra;

        $colocaEnX=rand(0,$maxHorizontal);
        $colocaEnY=rand(0, $maxVertical-1);
        for ($i=0; $i <$longPalabra ; $i++) { 
            $tablero[$colocaEnY+$i][$colocaEnX]=substr($palabra,$longPalabra-$i,1);
        }
        return $tablero;    
    }

    function colocar($tablero, $palabra){
        $num=rand(1,4);
                    /*Hay que cambiar el case 1 para que devuelva tablero */
        switch ($num) {
            case '1':
                colocarPalabraHorizontal($tablero, $palabra);
                break;
            
            case '2':
                colocarPalabraVertical($tablero, $palabra);
                break;
            case '3':
                colocarPalabraHorizontalInvertida($tablero, $palabra);
                break;
            case '4';
                colorarPalabraVerticalINvertida($tablero, $palabra);        
        }
    }

?>


<!DOCTYPE html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tablero=inicializarTablero($tablero, 6 , 12);
    pintarAlternativo($tablero);

    colocarPalabraHorizontal($tablero,"coche");
    echo"<br>";
    pintarAlternativo($tablero);

    $verti=inicializarTablero($tablero, 6 , 12);
    $verti=colocarPalabraVertical($verti, "pepsi");
    echo"<br>";
    pintarAlternativo($verti);

    $horizontalInv=[];
    $horizontalInv=inicializarTablero($horizontalInv,7,7);
    $horizontalInv=colocarPalabraHorizontalInvertida($horizontalInv, "penita");
    echo"<br>";
    pintarAlternativo($horizontalInv);

    $verticalInv=[];
    $verticalInv=inicializarTablero($verticalInv,10,10);
    $verticalInv=colorarPalabraVerticalINvertida($verticalInv,"ooooooo");
    echo "<br>";
    pintarAlternativo($verticalInv);
    ?>
    
</body>
</html>