 <!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<meta charset="iso-8859-1">
	<title>Clientes</title>
	</head>
         <body background="imagenes/imagen4.jpg">
		 <br>
	    <br>
		 <br>
		  <br>
		     <br>
	    <br>
		 <br>
		  <br>
       <form method="get" name="form2" id="form2">
	
       
          Introduzca el nombre del cliente a buscar
     
            <input name="nombre" type="text" id="nombre" size="" autocomplete="off" />
			
            <button type="submit" name="consultar" id="consultar">Consultar</button><br><br>
            <a href="lista_clientes.php">Nueva Busqueda /</a> <a href="mostrar_clientes.php"> Mostrar todos /</a> <a href="cliente.html">Agregar Cliente</a>
          
       
    </form>
	<center><a href="menu.html">Regresar</a>
	<br>
<?php 
	if(isset($_GET['consultar']))
	{
		if($_GET['nombre'] == ""){
		//echo "Debe Introducir el N&uacute;mero de Control para Realizar la B&uacute;squeda";
		?>
<script type="text/javascript">
			alert("Debe introducir  nombre");	
		</script>
<?php
		} else
		{
		
		include('conexion.php');
	
       
		$nom = $_GET['nombre'];
		
		$sql="Select * from cliente where nombre like '%$nom%' OR apellidos like '%$nom%'";
		 
		$consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		if($nf!=0)		
		{?>
<center><table border="1">
  <tr >
    <th>Id</th>
    <th>Nombre</th>
    <th>Eliminar</th>

  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $cliente=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $cliente['id_cliente'];?></td>	
    <td><?php echo $cliente['nombre'];?>   <?php echo $cliente['apellidos'];?></td>	
	
 <td><a href="eliminar_cliente.php?id_cliente=<?php echo $cliente['id_cliente']?>">Eliminar</a></td>

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