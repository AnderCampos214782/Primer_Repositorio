<?php
/*  CBTIS 89
	P33Array14.php
	Programa que muestra un array ascendente y descendente  con nombres, agregando y quitando datos al arreglo 
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$array=array("Ivan","David","Diego","Manuel","Emiliano","Santiago");
$longitud=count($array);


echo "Ascendente","<p>";
sort($array);
for ($i=0;$i<$longitud;$i++)
	{echo $array[$i];
		echo "<br>";}

unset($array[3]);
unset($array[2]);

array_push($array,"Mauricio","Uriel","Pablo","Pedro");
echo "<p>","Descendente","<p>";

$longitud2=count($array);
rsort($array);
for ($i=0;$i<$longitud2;$i++)
	{echo $array[$i];
		echo "<br>";}

echo "<br>","El número de elementos actual es de ",$longitud2;
?>