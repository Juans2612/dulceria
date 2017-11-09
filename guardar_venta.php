<?php

include "conexion.php";
// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$id_articulo=$_POST['id_articulo'];
$id_cliente=$_POST['id_cliente'];
$fecha_venta=$_POST['fecha_venta'];
$total_compra=$_POST['total_compra'];


//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO venta VALUES('$id_articulo', '$id_cliente', '$fecha_venta', '$total_compra')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='venta.php';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>