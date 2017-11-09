<?php

$id_cliente=$_GET['id_cliente'];

include "conexion.php";	
mysqli_query($conn,"delete from cliente where id_cliente='$id_cliente'");

echo "<script type=\"text/javascript\">alert('registro borrado exitosamente');
		location.href='mostrar_clientes.php';</script>";

	
	?>
