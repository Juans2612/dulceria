<!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Mostrar Ventas</title>
	</head>
	 <body background="imagenes/imagen2.jpg">     
	<?php 
	include('conexion.php');
	      $sql="Select * from cliente inner join venta inner join articulo on cliente.id_cliente=venta.id_cliente and venta.id_articulo=articulo.id_articulo";
		 $consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		?>
		
<center>	<h1>Registros de Ventas</h1>
<table border="2">
  <tr >

	<th>Articulo</th>
	<th>Fecha de la venta</th>
    <th>Ventas</th>
    </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $venta=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $venta['nombre'];?></td>		
    <td><?php echo $venta['fecha_venta'];?></td>
    <td><?php echo $venta['total_compra'];?></td>

	<td><a href="reporte_venta.php?id_articulo=<?php echo $venta['id_cliente']?>&id_cliente=<?php echo $venta['fecha_venta']?>"></a></td>
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
		
</table>
<br>
<a href="menu.html" target="_self">Regresar</a>	
   </body>
</html>
