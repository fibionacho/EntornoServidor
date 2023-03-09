
<?php
    session_start();
    require("DWESBaseDatos.php");
    $db = DWESBaseDatos::obtenerInstancia();
    
    $db->inicializa(
        $CONFIG["db_name"] = "examen",
        $CONFIG["db_user"] = "examen",
        $CONFIG["db_pass"] = "examen"
    );
?>