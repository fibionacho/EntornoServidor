<?php 
require("..\src\init.php");
$title = "Listado de usuarios";
$pageHeader= "Listado";
$pageId="listado";

$content="esto es el contenido";

//obtiene info del modelo
$DB->ejecuta("SELECT * FROM usuarios");
$usuarios = $DB->obtenDatos();
//y se lo pasa al template
ob_start();



require("template.php");

/*




    <?php foreach($usuarios as $usuario) { ?>
        <?php 
            print_r($usuario);
        ?>
    <?php } ?>
    */
?>