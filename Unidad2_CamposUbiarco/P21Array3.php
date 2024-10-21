<?php
/*  CBTIS 89
	P21Array3.php
	Programa que hace almacena nombres en un arreglo y posteriormente los imprime por medio de un ciclo for
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino*/
$arraynombres= array("Pepe", "Pancho", "Jorge", "Diego", "Toño","Félix","Mario", "Alex");

//Se obtiene el número de elementos
$longitud = count($arraynombres);

//Recorre todos los elementos
for ($i=0; $i<$longitud; $i++)
{//Se obtiene el valor de cada elemento
echo $arraynombres[$i];
echo "<br>";
}
?>