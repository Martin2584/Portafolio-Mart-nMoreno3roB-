<html>
<head>
<meta charset="UTF-8">

<title> Ejemplo de Formulario </title>
</head>


<body 

BACKGROUND="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXfds7X2Eayek9BdV-tphjRUf6qNQDNsrPlg&usqp=CAU" TEXT="black">
<fieldset> 

     <center><h1 style="color:rgb(0, 21, 110); font-family:arial;" > 
        OBSERVACIONES
        <h1></center>  
        <h3> <center> <p>Martin Moreno 3ro B</p> </center> </h3>
          <center> <img src="http://www.forosecuador.ec/imgfe/sello-uce-logotipo-universidad-central-ecuador-1.png" alt="" width="300" height="300" /> </center>
              
          
<?php

$apellido = $_GET ["apellido"];
$nombre = $_GET ["nombre"];
$SEMESTRE = $_GET ["SEMESTRE"];
$ASIGNATURA = $_GET ["ASIGNATURA"];
$Nota = $_GET ["Nota"];

echo "Su apellido es:" . $apellido . "</br>";
echo "Su nombre es:" . $nombre . "</br>";
echo "Cursa el semestre numero:" . $SEMESTRE . "</br>";
echo "Cursa la asignatura de:" . $ASIGNATURA . "</br>";
echo "Y su nota es:" . $Nota . "</br>";


?>




</body>
</html>