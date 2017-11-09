<?php   
session_start(); //Para asegurar que siempre se use una sesion
session_destroy(); //destruir una sesion 
header("location:index.php"); //se direccione a "index.php" 
exit();
?>