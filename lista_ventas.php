 <!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<meta charset="iso-8859-1">
	<title>Ventas</title>
	</head>
	 <body>
       <form method="get" name="form2" id="form2">
       
          Introduzca nombre o producto.
     
            <input name="nombres" type="text" id="nombres" size="" autocomplete="off" />
			
            <button type="submit" name="consultar" id="consultar">Consultar</button><br><br>
            <a href="lista_ventas.php">Nueva Busqueda /</a> <a href="mostrar_ventas.php"> Mostrar todos /</a> <a href="venta.php">Agregar Ventas</a>
          
       
    </form>
	<a href="index.html">Regresar</a>
	<br>
<?php 
	if(isset($_GET['consultar']))
	{
		if($_GET['nombres'] == ""){
		//echo "Debe Introducir el N&uacute;mero de Control para Realizar la B&uacute;squeda";
		?>
<script type="text/javascript">
			alert("Debe introducir  nombre o producto para realizar la búsqueda");	
		</script>
<?php
		} else
		{
		
		include('conexion.php');
	
       
		$nom = $_GET['nombres'];
		
		$sql="Select * from cliente inner join venta inner join articulo on cliente.id_cliente=venta.id_cliente and venta.id_articulo=articulo.id_articulo where venta.id_cliente like '%$nom%' or venta.id_articulo like '%$nom%'";
		 
		$consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		if($nf!=0)		
		{?>
<table border="1">
  <tr >
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Fecha Prestamo</th>
    <th>Fecha Entrega</th>
    <th>Accion</th>
  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $prestamo=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $venta['nombre'];?> <?php echo $venta['apellidos'];?></td>	
	<td><?php echo $venta['nombre'];?></td>	
    <td><?php echo $venta['fecha_venta'];?></td>
    <td><?php echo $venta['total_compra'];?></td>

	<td><a href="reporte_producto.php?id_cliente=<?php echo $venta['id_cliente']?>">Imprimir</a></td>
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
</table>
<p>
  <?php }// if de nf	
		else{
			//echo "No Existe en la Base de Datos";?>
  <script type="text/javascript">
			alert("No existe en la base de datos");
  </script>
  
  <?php 
			}
      	 }// else
	}// si existe consultar 
	?>
  </tr>
  </table>
   </body>
<html>