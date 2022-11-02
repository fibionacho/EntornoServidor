
<?php 
print_r($_SERVER);
echo "<hr>";
print_r($_GET);
echo "<hr>";
print_r(($_POST));
echo "<hr>";
$nav=explode(" ",$_SERVER["HTTP_USER_AGENT"]);
$idioma=explode(",",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form  name="formulario "method="get" action="form1.php" >
        Nombre: <input type="text" name="nombre"><br>
        Sexo:<br> Mujer <input type="radio" name="sexo" value="M">
        Hombre <input type="radio" name="sexo" value="H">
        Otro:  <input type="radio" name="sexo" value="Otro">        <br>
        Color favorito: <input type="color" name="colorfavorito">
        <br>
        <input type="submit" value="enviar">

    </form>

    <h3>Estás utilizando <?=($_SERVER["HTTP_USER_AGENT"])?></h3>
    <h3>Estás utilizando <?=($nav[count($nav)-1])?> como navegador</h3>
    <h3>Tu idioma es <?=$idioma[0]?></h3>

    <?php
        if($idioma[0]=="en-US"){
            echo "This is in English";
        }elseif($idioma[0]=="es"){
            echo "Esto es españolo";
        }
    ?>
</body>
</html>