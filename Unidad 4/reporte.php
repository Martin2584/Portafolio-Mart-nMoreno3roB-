{
// Cabecera de página
encabezado de función ()
{
    
    // Arial negrita 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $esto->Celda(60);
    // Título
    $esto->Celda(70,10,'REPORTE GENERAL',1,0,'C');
    // salto de linea
    $esto->Ln(20);

    $esto->Celda(50,10,'apellido',1,0,'C',0);
    $esto->Celda(50,10,'nombre',1,0,'C',0);
    $esto->Celda(20,10,'edad',1,0,'C',0);
    $este->Celda(30,10,'telefono',1,1,'C',0);


}

// pie de página
función Pie de página()
{
    // Posición: a 1,5 cm del final
    $esto->EstablecerY(-15);
    // Arial cursiva 8
    $this->SetFont('Arial','I',8);
    // Numero de pagina
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}


requiere 'cn.php';
$consulta="SELECCIONAR * DE ejemplo";
$resultado=$mysqli->query($consulta);


$pdf = nuevo PDF();
$pdf->AliasNbPáginas();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//$pdf->Celda(40,10,utf8_decode('¡Hola, Mundo!'));
while($fila=$resultado->fetch_assoc()){
$pdf->Celda(50,10,$fila['apellido'],1,0,'C',0);
$pdf->Celda(50,10,$fila['nombre'],1,0,'C',0);
$pdf->Celda(20,10,$fila['edad'],1,0,'C',0);
$pdf->Celda(30,10,$fila['telefono'],1,1,'C',0);

}
$pdf->Salida();
?>