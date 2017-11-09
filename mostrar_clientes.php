 <!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<title>Mostrar Clientes</title>
	</head>
	 <body background="imagenes/imagen3.jpg">    
	<?php 
	include('conexion.php');
	      $sql="Select * from cliente";
		 $consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		?>
		
	
<center><table border="1">
  <tr >
  			<br><center><image src="imagenes/logo2.png">
  <br>
    <th>Id</th>
    <th>Nombre</th>
    <th>Eliminar</th>
	<th>Imprimir</th>
  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $cliente=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $cliente['id_cliente'];?></td>	
    <td><?php echo $cliente['nombre'];?>   <?php echo $cliente['apellidos'];?></td>
    
		
	
 <td><a href="eliminar_cliente.php?id_cliente=<?php echo $cliente['id_cliente']?>">Eliminar</a></td>
 
 <td><a href="reporte_clientes.php?id_cliente=<?php echo $cliente['id_cliente']?>">Imprimir</a></td>
 
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
		
</table>
<br>
<a href="lista_clientes.php" target="_blank">Regresar</a>	
   </body>
</html>