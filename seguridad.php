<?php
session_start();		//para asegurar que se utiliza una sesion 
	   if($_SESSION["seguridad"] != 1) {
	   			header ("location:index.php");
		}
		
?>