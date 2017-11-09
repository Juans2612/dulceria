



<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
     
	 function Header()
   {
      $this->Image('imagenes/logo.png',10,8,80);

   }
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','B',8);
    $this->Line(200,260,20,260);
    $this->Cell(0,10,'Todos los Derechos Reservados 2016',0,0,'C');
	}
}
 $id_cliente=$_GET['id_cliente'];
 include('conexion.php');
 $consulta="select * from cliente where id_cliente like '$id_cliente'";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
    $pdf = new PDF();
    $pdf->AddPage('P', 'Letter'); 
    $pdf->SetFont('Arial','B',20); 
	$pdf->SetXY(75,60);
	$pdf->cell(70,8,'Datos del Cliente',0,0,'R');
	$pdf->SetFont('Arial','B',12); 
	$pdf->SetXY(75,80);
	$pdf->cell(20,8,'Nombre:',0,0,'R');
	$pdf->cell(20,8,$lista['nombre'],1,1);
    $pdf->SetXY(75,90);
	$pdf->cell(20,8,'Apellidos:',0,0,'R');
	$pdf->cell(20,8,$lista['apellidos'],1,1);
	$pdf->SetXY(75,100);
	$pdf->cell(20,8,'Direccion:',0,0,'R');
	$pdf->cell(60,8,$lista['direccion'],1,1);
	$pdf->SetXY(75,110);
	$pdf->cell(20,8,'Telefono:',0,0,'R');
	$pdf->cell(60,8,$lista['telefono'],1,1);

 
    $pdf->Output(); 
}
?>