<!DOCTYPE html>

 <html lang="es">
    <head>
		<meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Articulo</title>
	</head>
	<body background="imagenes/imagen5.jpg">
	  
	    <form id="articulo" name="articulo" method="post" action="guardar_producto.php" class="form-validation" >
		<h1>Registro de Articulo</h1>
		<center><legend><span </span>Información de Articulos</legend></center>
		<fieldset>
		
		 Nombre del Producto:<br>
         <input type="text" name="nombre" placeholder="Nombre" required>
		 <br>
		 Precio:<br>
         <input type="number" name="precio" placeholder="Precio" required>
		 <br>
		 Codigo de Barras:<br>
		 <input type="number" name="codigo_bar" required>
		 <br>
</select>  

		 Proveedor:<br>
<select name="id_proveedor">
   
     <?php
           include "conexion.php";
		   $consulta="select * from proveedor";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['id_proveedor']?>">  <?php echo $lista['nombre']?></option> 
    <?php } ?>
</select> 		   <br>
		 <button type="submit">Guardar</button>
		 <a href="menu.html">Regresar</a>
		 </fieldset>
		</form>
	 
	 </body>
<html>