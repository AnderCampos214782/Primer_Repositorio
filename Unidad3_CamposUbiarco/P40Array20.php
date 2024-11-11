<?php
/* CBTIS 89
	P40Array20.php
	Programa que almacena por medio de un ciclo los números del 150 al 200 de la siguiente manera:
	En el $arreglo1 van los números pares, en el $arreglo2 van los números impares, en el $arreglo 3 va la suma de los números correspondiente al mismo índice.
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/

$arreglo1=array();
$arreglo2=array();
$arreglo3=array();
$numeros=150;
$residuo=0;
$resultado=0;

echo "CBTIS 89","<br>","Arreglo 1 "," - - ","Arreglo 2"," - - ","Arreglo 3","<br>";

for ($i=0; $i<52; $i++) { 
	$residuo=$numeros%2;
	if ($residuo==0){
		array_push($arreglo1,$numeros);
	} else if ($residuo!=0){
		array_push($arreglo2,$numeros);
	}
	$numeros++;
}
for ($i=0; $i<26; $i++) { 
	$arreglo3[$i]=$arreglo1[$i]+$arreglo2[$i];
}
for ($i=0; $i<26; $i++) { 
	echo $arreglo1[$i]," - - - - - - - ",$arreglo2[$i]," - - - - - - - ",$arreglo3[$i],"<br>";
}
?>