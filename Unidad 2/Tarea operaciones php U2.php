<html>
<head>
<title>Ejercicio de deber en PHP</title>
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXfds7X2Eayek9BdV-tphjRUf6qNQDNsrPlg&usqp=CAU">
<h1> <center> <p>EJERCICIOS APLICACIÓN PHP</p> </center> </h1>
<br />

<center> <img src="http://www.forosecuador.ec/imgfe/sello-uce-logotipo-universidad-central-ecuador-1.png" alt="" width="300" height="300" /> </center>
<h2> <center> <p>EJERCICIOS Y RESPUESTAS</p> </center> </h2>
<h3> <center> <p>Martin Moreno 3ro B</p> </center> </h3>
<?PHP

echo "<h1> Ejercicio#1: </h1> "; //x^2Div(A)>5*X+3  
    $X = 4;
    $A=3;
    $c=2;
    $d=5;
    

        $r1 =(pow($X,$c))/$X>$d*$X+$A;
    var_dump($r1);
    
echo "<h1 > Ejercicio #2 </h1></center> "; //A=5    
$a1=5;
$b1=2;

$r2=TRUE;
var_dump($r2);


echo "<h1 SetTextColor(25,174,194)> Ejercicio #3 </h1>"; // (7Div3>5)>(2^(10-7)=8)
$a3=7;
$b3=3;
$c3=5;
$d3=2;
$e3=10;
$f3=8;

$r3 = ($a3/$b3>$c3) > ((pow($d3,($e3-$a3)))==$f3);
var_dump($r3);


echo "<h1 > Ejercicio #4 </h1>"; //7div3+8<=2^(10-7) 

$num1=7;
$num2=2;
$num3=3;
$num4=8;
$num5=10;
 
$r4 = $num1/($num3+$num4)<=(pow($num2,($num5-$num1))); 
var_dump ($r4);


echo "<h1> Ejercicio #5 </h1>"; //Si a=2 y b=20 y c=15
//(a<5)OR(b>25)
$a5=2;
$b5=15;
$num8=5;
$num9=25;

$r5=($a5<$num8) OR ($b5>$num9);
var_dump($r5);


echo "<h1> Ejercicio #6 </h1>"; //Si a=5 y b=15
//(a>5)OR(b<a)
$a6=5;
$b6=15;

$r6 = ($a6>5) OR ($b6<$a6);
var_dump($r6);


echo "<h1> Ejercicio #7 </h1>"; //Si a=30, b=20 y c=15
//(a>b)OR(b>c)
$a7=30;
$b7=20;
$c7=15;

$r7 = ($a7>$b7) OR ($b7>$c7);
var_dump($r7);


echo "<h1> Ejercicio #8 </h1>"; //Si a=30, b=20 y c=15
//(a>c)OR(c<b)
$a8=30;
$b8=20;
$c8=15;

$r8= ($a8>$c8) OR ($c8<$b8);
var_dump($r8);


echo "<h1> Ejercicio #9 </h1>"; //Si a=20, b=a, c=15 y d=10
//((a=b)OR(b<c))OR(c<d)
$a9=20;
$b9=$a9;
$c9=15;
$d9=10;

$r9=(($a9==$b9)OR($b9<$c9))OR($c9<$d9);
var_dump($r9);


echo "<h1> Ejercicio #10 </h1>"; //Si a=5, b=10, c=15 y d=20
//((a<b)OR(b=c))OR(c<d)
$a10=5;
$b10=10;
$c10=15;
$d10=20;

$r10 = (($a10<$b10)OR($b10==$c10))OR($c10<$d10);
var_dump($r10);


echo "<h1> Ejercicio #11 </h1>"; //Si a=15 y b=10
//NOT(a+b>20)OR TRUE
$a11=15;
$b11=10;

$r11 = !($a11+$b11>20) OR TRUE;
var_dump($r11);


echo "<h1> Ejercicio #12 </h1>"; //A y B son TRUE y P y Q son FALSE
//NOT(A OR B)AND NOT(P AND Q)
$a12=TRUE;
$b12=TRUE;
$p=FALSE;
$q=FALSE;

$r12 = !($a12 OR $b12)&&!($p&&$q);
var_dump($r12);


echo "<h1> Ejercicio #13 </h1>";//Si a=10 y SW=FALSE
//((a>10)AND(a<20))AND SW
$a12=10;
$SW=FALSE;

$r13 = (($a12>10)&&($a12<20))&&$SW;
var_dump($r13);


echo "<h1> Ejercicio #14 </h1>"; // Si a=10 y b=2*a+5
//NOT((a>10)OR(b<20))AND FALSE
$a13=10;
$b13=2*($a13)+5;

$r14 = !(($a13>10)OR($b13<20))&&FALSE;
var_dump($r14);


echo "<h1> Ejercicio #15 </h1>"; //Si a=10
//NOT((a>10)AND(a<20))
$a14=10;

$r15 = !(($a14>10)&&($a14<20));
var_dump($r15);


echo "<h1> Ejercicio #16 </h1>";//Si a=10
//NOT(a>10)OR NOT (b<20)
$a15=10;
$b15=FALSE;

$r16=!($a15>10)OR!($b15<20);
var_dump($r16);


echo "<h1> Ejercicio #17 </h1>";//Si a=10, b=22 que valor tiene P
//P=(a=b)OR(a<>b)
$a17=10;
$b17=22;

$r17 = ($a17==$b17)OR($a17<>$b17);
var_dump($r17);


echo "<h1> Ejercicio #18 </h1>"; //Si a=10, b=22, c=44 que valor tiene P
//P=(a=b)AND(c<>a)
$a18=10;
$b18=22;
$c18=44;


$r18 = ($a18==$b18)&&($c18<>$a18);
var_dump($r18);


?>
</body>
</html> 