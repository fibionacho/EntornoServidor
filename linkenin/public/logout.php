<?php
require("init.php");
session_destroy();
setcookie("recuerdame", null, time()-1);
?>
