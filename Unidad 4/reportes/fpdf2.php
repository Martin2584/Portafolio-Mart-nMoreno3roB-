<?php
require('C:\xampp\htdocs\ejercicios\reportes\fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de Productos',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
require "cn.php";
$consulta= "SELECT * FROM  ejemplo";
$resultado= $mysqli-> query($consulta);
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

while($row = $resultado->fetch_assoc()){
    $pdf-> Cell(90, 10, $row["Nombre"],1,0,"C",0);
    $pdf-> Cell(90, 10, $row["Apellido"],1,0,"C",0);
    $pdf-> Cell(90, 10, $row["Edad"],1,0,"C" ,0);
    $pdf-> Cell(90, 10, $row["Telefono"],1,1,"C",0);
}

$pdf->Output();
?>
