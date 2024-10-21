<?php
/*  CBTIS 89
	P20Array2.php
	Programa que hace almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino*/
$nombre = "Anna";
$array= array(1, 2, 3, "Casa", $nombre);

//Se obtiene el número de elementos
$longitud = count($array);

//Recorre todos los elementos
for ($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemento
echo $array[$i];
echo "<br>";
}
?>