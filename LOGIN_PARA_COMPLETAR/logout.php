<?php
    require("src/init.php");
    session_destroy();
    header('Location: enlaces.php');
    die();

?>