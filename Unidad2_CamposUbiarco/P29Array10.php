<?php
/*  CBTIS 89
	P29Array10.php
	Programa que recorre un array de nombres y muestra si el nombre escrito está en el arreglo
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$array=array("Pepe","Juan","Paco","Uriel","Mauricio","Pablo","Alexis","Eduardo");
$nombre="Eduardo";
$longitud = count($array);
   for($i=0; $i<$longitud; $i++){ 
        if ($nombre==$array[$i])
      	{echo "<br>","Este nombre está en el array","<br>",$nombre,"<br>";}
      else 
      	echo "<br>","Este nombre no está en el Array","<br>",$nombre,"<br>";
   }
?>