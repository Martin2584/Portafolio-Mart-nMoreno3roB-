
<html>
<head>
<title>Ejercicio de deber en PHP</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXfds7X2Eayek9BdV-tphjRUf6qNQDNsrPlg&usqp=CAU">
<h1> <center> <p>EJERCICIO switch PHP</p> </center> </h1>
<br />
<center> <img src="http://www.forosecuador.ec/imgfe/sello-uce-logotipo-universidad-central-ecuador-1.png" alt="" width="300" height="300" /> </center>

<h3> <center> <p>Martin Moreno - Brando Pachacama 3ro B</p> </center> </h3>

<form action="#" method= "POST"
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXfds7X2Eayek9BdV-tphjRUf6qNQDNsrPlg&usqp=CAU"> </body>
<center> <h1> <label> Escriba el día de la semana </label> </h1>
<input name="mes" type="text"><br>
<input type="submit" value="VERIFICAR"> </center>
</form>

<?php

$mes = $_POST["mes"];
switch ($mes) {
 
	
	case 1: echo ("<h1> <center> Dia LUNES y faltan 6 dias para que termine la semana </center> </h1>");
    break;

	case 2: echo ("<h1> <center> Dia MARTES y faltan 5 dias para que termine la semana </center> </h1>");
    break;

	case 3: echo ("<h1> <center> Dia MIERCOLES y faltan 4 dias para que termine la semana </center> </h1>");
    break;

	case 4: echo ("<h1> <center> Dia JUEVES y faltan 3 dias para que termine la semana </center> </h1>");
    break;

	case 5: echo ("<h1> <center> Dia VIERNES y faltan 2 dias para que termine la semana </center> </h1>");
    break;

	case 6: echo ("<h1> <center> Dia SABADO y falta 1 dia para que termine la semana </center> </h1>");
    break;

	case 7: echo ("<h1> <center> Dia DOMINGO y hoy termina la semana </center> </h1>");
    break;

	
	default: echo (" <h1> <center> Error, no es un dia de la semana </center> </h1> ");
	break;
}

?>
</body>
</html> 