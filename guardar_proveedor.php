<?php
//Gaurdar los datos del servidor y la bd en variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dulceria";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$nombre=$_POST['nombre'];
$compañia=$_POST['compañia'];

//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO proveedor VALUES('0', '$nombre', '$compañia')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='proveedor.html';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>