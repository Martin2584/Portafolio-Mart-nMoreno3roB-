<?php
if(isset($_POST['color'])){
  $color = $_POST['color'];
  setcookie("color", $color, time()+80000000);
} else {
  if(isset($_COOKIE['color'])) {
  $color = $_COOKIE['color'];
  } else {
    $color = 'white';
  }
}
?>
<html>
  <head>
    <title>Ejercicio</title>
    <meta charset = "UTF-8" />
  </head>
  <body <?php echo "style='background-color:$color'"; ?>>
      <form method="post" action="ejer7.php" >
  <label for="color">Escoge tu color de fondo</label>
  <select name="color">
  <option value="red">ROJO</option>
  <option value="blue">AZUL</option>
  <option value="green">VERDE</option>
  <option value="yellow">AMARILLO</option>
  <option value="silver">GRIS</option>
  <option value="black">REGRO</option>
</select>
  <input type="submit" value="cambiar color!"/>
  <?php
 echo "<html><head><title>Ejercicios</title></head><boby><center><h1>EJERCICIO NUMERO 1</h1></boby></html>";
 $num1=4;
 $num2=4;
 $num3=2;
 $num4=3;
 $num5=10;
  $cal=$num1*$num2-$num3/$num4+$num5;
   print   $cal; 
   echo " <h1>EJERCICIO NUMERO 2</h1>";
   $num1=4;
 $num2=6;
 $num3=4;
 $num4=2;
 $num5=3;
 $num6=10;
  $cal=$num1*$num2/$num3*$num4*$num5+$num6=10;
   print $cal; 
    ?>
  <br><br><br><br><br><br>
  <a href="inicio.html">Regresar a inicio</a>
  
</form>
</body>
</html>