<?php 

const LONG_TOKEN = 32;

require("config.php");
require("DWESBaseDatos.php");
require("")

$DB=DWESBaseDatos::obtenerInstancia();
$DB->inicializa(
    $CONFIG['db_name'],
    $CONFIG['db_user'],
    $CONFIG['db_pass']
);
session_start();

?>