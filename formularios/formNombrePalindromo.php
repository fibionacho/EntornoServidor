<?php
$nombre="";
$voc=0;
$cons=0;
$palindromo=true;
if(isset($_GET['nombre'])){
    $nombre=$_GET['nombre'];
}
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario</title>
        <link rel="stylesheet" href="estiloform.css"/>
        

      
    </head>
    
    <body>
        
         <form name="formulario" method="get" >
            <p>Introduce tu nombre</p>
                <input type="text" name="nombre" size="25" placeholder="Ej. Pepito" value="<?=$nombre ?>">
                <br>
                <input id="boton" type="submit" value="enviar"/>  
        </form>

<?php

            for($i=0;$i<strlen($nombre);$i++){
                $letra=$nombre[$i];
                if($letra == 'a'||$letra == 'e'||$letra == 'i'||$letra == 'o'||$letra == 'u'){
                    ++$voc;
                }else
                    ++$cons;
            }
?>

          
<br>

<?php
    for($j=0; $j<strlen($nombre)/2 && $palindromo; $j++){
        $letra1=$nombre[$j];
        $letra2=$nombre[strlen($nombre)-$j-1];
        if($letra1 !== $letra2){
            $palindromo=false;
        }
    }
?>

<br>



<ul>
    <li> <?php echo "Numero de vocales: ".$voc?></li>
    <li> <?php echo "Numero de consonantes: ".$cons?></li>
    <li> <?php
                    if($palindromo){
                        echo "Es palindromo";

                    }else{
                        echo "No es palindromo";
                    }
                    ?> </li>

</ul>

    </body>
</html>