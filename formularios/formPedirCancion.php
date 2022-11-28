<?php
$temazo="";
$hora=date("h");
$min=date("i");
$opcionesMinuto = [0,15,30,45];

$mayores = array_filter($opcionesMinuto,function($m){
   global $min;
    return $m > $min;
});

if(empty($mayores)){
    $min=0;
    $hora++;
}else{
    $min = array_shift($mayores);
}


$errores = [];

//ver si user envia info
if(isset($_POST['enviar'])){
    if(isset($_POST['temazo']) && $_POST['temazo'] !=""){
        $temazo=$_POST['temazo'];

    }else{
        $errores['temazo'] = 'No puedes estar vacio el tema';
    }

    if(isset($_POST['hora']) && $_POST['hora'] !=""){
        $hora=$_POST['hora'];

    }else{
        $errores['hora'] = ['No puedes estar vacio la hora'];
    }

    if(isset($_POST['min']) && $_POST['min'] !=""){
        $min=$_POST['min'];

    }else{
        $errores['min'] = ['No puedes estar vacio el minuto'];
    }

    if (count($errores)==0) {

            file_put_contents(
                "temazos.csv",
                "$temazo;$hora;$min\n",
                FILE_APPEND
            );
            header("Location: listado.php");

        exit();
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- <link rel="stylesheet" href="estilo.css"> -->
</head>
<body>
    
<form name="formulario "method="post" action="form2.php">
    <label for="cancion">Cancion</label>
    <input type="text" name="cancion"  id="cancion" value="<?=$temazo?>" placeholder="Pon tu temazo"/>

    <?php
    if(count($errores['temazo'])>0){
        echo' <div class="error">';
        echo '<p>'.$errores['temazo'].'</p>';
        echo '</div>';
    }
    ?>

           

    <label for="hora"></label>
    <input type="number" size="1" name="hora" id="hora" max="23" min="00" value="<?=$hora?>">
    <label for="minuto">mm</label>
    <select name="min" id="min">
        <?php
            array_walk($opcionesMinuto, function($op, $k, $d){
                $sel = ($op==$d)?"selected":"";
                echo "<option value='$op' $sel>$op</option>";
            },
            $min)
        ?>
      
    </select>

    <div class="error">
                <p>Error 1</p>
            </div>

            <input type="submit" value="Enviar" name="enviar">
</form>

</body>
</html>