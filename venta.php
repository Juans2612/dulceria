<!DOCTYPE html>

 <html lang="es">
    <head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Ventas</title>
	</head>
	 	<body background="imagenes/imagen1.jpg">

	  
	    <form id="articulo" name="articulo" method="post" action="guardar_venta.php" class="form-validation" >
		<h1>Ventas</h1>
		<legend>Captura la venta del dia</legend>
		<fieldset>
	    			 
		 <span class="number">1</span>Seleccionar el cliente:<br>
<select name="id_cliente">
   
     <?php
           include "conexion.php";
		   $consulta="select * from cliente";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['id_cliente']?>">  <?php echo $lista['nombre']?> </option> <?php echo $lista['apellidos']?> </option> 
    <?php } ?>
</select> 
		 <br>
   <span class="number">2</span>Seleccionar el articulo:<br>
	<select name="id_articulo">
   
     <?php
           include "conexion.php";
		   $consulta="select * from articulo";
                 $resultado=mysqli_query($conn,$consulta);
                       
                        while($lista=mysqli_fetch_array($resultado)){
 
	    ?> 
                   <option value="<?php echo $lista['id_articulo']?>">  <?php echo $lista['nombre']?> 
    <?php } ?>
</select> 
 <span class="number">3</span>Fecha de la venta:<br>
		 <input type="date" name="fecha_venta" required>
		 <br>
 <span class="number">4</span>Total de la compra:<br>
		 <input type="text" name="total_compra" required>
		 <br><br>
		 <button type="submit">Guardar</button>
		 <a href="menu.html">Regresar</a>
		 </fieldset>
		</form>
	 
	 </body>
<html>