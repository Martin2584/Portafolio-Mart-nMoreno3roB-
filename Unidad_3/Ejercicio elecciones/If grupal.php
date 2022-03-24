<form action="#" method= "POST"
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXfds7X2Eayek9BdV-tphjRUf6qNQDNsrPlg&usqp=CAU"> </body>
<center> <h1> <label> Escriba el mes </label> </h1>
<input name="mes" type="text"><br>
<input type="submit" value="VERIFICAR"> </center>
</form>

<?php

$mes = $_POST["mes"];
switch ($mes) {
 
	
	case 1: echo ("<h1> <center> Es el mes de ENERO </center> </h1>");
    break;

	case 2: echo ("<h1> <center> Es el mes de FEBRERO </center> </h1>");
    break;

	case 3: echo ("<h1> <center> Es el mes de MARZO </center> </h1>");
    break;

	case 4: echo ("<h1> <center> Es el mes de ABRIL </center> </h1>");
    break;

	case 5: echo ("<h1> <center> Es el mes de MAYO </center> </h1>");
    break;

	case 6: echo ("<h1> <center> Es el mes de JUNIO </center> </h1>");
    break;

	case 7: echo ("<h1> <center> Es el mes de JULIO </center> </h1>");
    break;

	case 8: echo ("<h1> <center> Es el mes de AGOSTO </center> </h1>");
    break;

	case 9: echo ("<h1> <center> Es el mes de SEPTIEMBRE </center> </h1>");
    break;

	case 10: echo ("<h1> <center> Es el mes de OCTUBRE </center> </h1>");
    break;

	case 11: echo ("<h1> <center> Es el mes de NOVIEMBRE </center> </h1>");
    break;

	case 12: echo ("<h1> <center> Es el mes de DICIEMBRE </center> </h1>");
    break;

	
	default: echo (" <h1> <center> Error el numero ingresado no pertenece a un mes </center> </h1> ");
	break;
}

?>
