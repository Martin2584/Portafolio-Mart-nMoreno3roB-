<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cédula</title>
</head>
</body <center>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXfds7X2Eayek9BdV-tphjRUf6qNQDNsrPlg&usqp=CAU"> >
<CENTER>

</font>
</MARQUEE> 
</CENTER>

    <form action="#" method="post"> 

    <center> <font color=#A11E09><h1>Ingresa tu cédula:</h1></font>

<center><input type="text" name="cedula" ></center>
<center><br><input type="submit" value="VERIFICAR"></center><br>
</form>
</body>
</html>


<?php
$cedula=$_POST["cedula"];
echo " <h3>El número de cédula ingresado es: {$cedula}</h3> "."<h4>PARES</h4>";
$resultado_suma=0;
$redondea=0;
$sp=0;
$si=0;



for($i=1;$i<=8;$i=$i+2)
{

$rest = substr( $cedula, $i, 1); // returns "d"
$sp=$sp+intval($rest);


 echo "<br>".$rest; // pares

}
echo "<h3>La suma es: {$sp}  </h3>  "  ."<h4>IMPARES</h4>";// suma 

for($i=0;$i<=9;$i=$i+2)
{

$rest = substr($cedula, $i, 1); // returns "d"

$x=2*intval($rest);
if ($x>=9)
$x=$x-9;
$si=$si+$x;
echo "<br>".$rest; // impares
}
echo  "<h3>La suma es :  {$si}</h3>   "; // suma 
$resultado_suma=$sp+$si; 

echo " <h3>La suma total es: {$resultado_suma}  </h3>"; // la suma total


$redondea=ceil($resultado_suma/10)*10;// la decena superior
echo "<h3>La decena superior es: {$redondea}  </h3>" ; 
$resta=$redondea-$resultado_suma;
 echo "<h3>La resta es: {$resta}  </h3>"   ;
 
 
 ?>
