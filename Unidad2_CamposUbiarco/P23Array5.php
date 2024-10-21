<?php
/*  CBTIS 89
	P23Array5.php
	Programa que almacena datos en un arreglo y posteriormente los imprime
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$mercancia = array(25=>"Manzana",40=>"Mango",35=>"Limón",20=>"Naranja");
echo "** FRUTERÍA DEL SUR **","<br>","<br>";
foreach($mercancia as $precio=>$fruta)
	{echo "El kilo de ". $fruta. " cuesta ". $precio;
echo "<br>","<br>";
}
?>