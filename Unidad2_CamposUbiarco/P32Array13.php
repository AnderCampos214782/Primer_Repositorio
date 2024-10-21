<?php
/*  CBTIS 89
	P32Array13.php
	Programa que muestra un array ascendente y descendente
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$array = array("Camisa","Pantalón","Cinturón");
array_push($array,"Gorra","Calcetines");
sort($array);
var_export($array);

echo "<p>";
//descendente
rsort($array);
var_export($array);
?>