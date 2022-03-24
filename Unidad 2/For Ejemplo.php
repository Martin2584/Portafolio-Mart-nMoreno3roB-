<?php 
$nombre1   = "Adriana";
$apellido1 = "Ortiz";
$arr = array("Pedro", "Duarte");

echo "<table>";
echo "<tr>";
echo "  <th> Código  </th>";
echo "  <th> Producto </th>";
echo "</tr>";
echo "<tr>";
echo "<td> " . $nombre1 . "</td>";
echo "<td> " . $apellido1 . "</td>";
echo "</tr>";
echo "<tr>  <td>" . $arr[0] . "</td> <td>" . $arr[1] ."</td>  </tr>" ;
echo "</table>";
?>