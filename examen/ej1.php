<?php

    function pintaCabecera(...$par):string{
        $nuevaCadena="";
        $abrir="<th>";
        $cerrar="</th>";
        for ($i=0; $i < count($par); $i++) { 
            $nuevaCadena.=$abrir.$par[$i].$cerrar;
        }
       return "<tr>".$nuevaCadena."</tr>";
    }

    function pintaContenido(...$var):string{
        $newChain="";
        $open="<td>";
        $close="</td>";
        for ($i=0; $i < count($var); $i++) { 
            $newChain.=$open.$var[$i].$close;
        }
        return "<tr>".$newChain."</tr>";
    }



        $arr=[
            0=>["a"],
            1=>["b"],
            2=>["c"]
        ];


        function pintaHorizontal($arr){
                echo "<table><tr>";

                foreach ( $arr as $key => $value) {
                    echo "<th>".$key."</th></tr><tr><td>".$value."</td></tr>";
                

                 

                }
                echo "</table>";
        }



   /* function llamada($arr){
        $nuevo="";
            for($i=0;$i<count($arr);$i++)  {
                $nuevo.=$arr;
            }
            return $nuevo;
    }

    $cuerpoHorario=array_map(llamada($cuerpo),$cuerpo);*/


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
    <table>
        <?php
        $cabeza= pintaCabecera("Lunes", "Martes", "Miercoles", "Jueves", " viernes");    
         print_r($cabeza);

         $cuerpo = pintaContenido(" ", " ", " "," "," ");
         print_r($cuerpo);
        /* print_r(array_map(llamada($cuerpo), $cuerpo[]));*/
            ?>
    </table>




    <br>


    <?php
        pintaHorizontal($arr);
    ?>

</body>
</html>