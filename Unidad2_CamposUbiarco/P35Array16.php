<?php
/*  CBTIS 89
	P35Array16.php
	Programa que suma, resta, multiplica y divide dos arreglos con datos numéricos
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$suma=0;
$resta=0;
$multi=0;
$divi=0;
echo "SUMA ENTRE ARREGLOS";echo "<br>";
$array1=array(40,60,80,100,19);
$array2=array(15,25,56,60,5);
$longitud=count($array1);

$arraysum=array();
$arrayres=array();
$arraymult=array();
$arraydivi=array();

	for($i=0;$i<$longitud;$i++)
	{$suma=$array1[$i]+$array2[$i];
	array_push($arraysum,$suma);
	echo $array1[$i]," + ",$array2[$i]," = ",$arraysum[$i];
	echo "<br>";}

echo "<p>","RESTA ENTRE ARREGLOS","<br>";
	for($i=0;$i<$longitud;$i++)
	{$resta=$array1[$i]-$array2[$i];
	array_push($arrayres,$resta);
	echo $array1[$i]," - ",$array2[$i]," = ",$arrayres[$i];
	echo "<br>";}

echo "<p>","MULTIPLICACIÓN ENTRE ARREGLOS","<br>";
	for($i=0;$i<$longitud;$i++)
	{$multi=$array1[$i]*$array2[$i];
		array_push($arraymult,$multi);
	echo $array1[$i]," x ",$array2[$i]," = ",$arraymult[$i];
	echo "<br>";}

echo "<p>","DIVISIÓN ENTRE ARREGLOS","<br>";
	for($i=0;$i<$longitud;$i++)
	{$divi=$array1[$i]/$array2[$i];
		array_push($arraydivi,$divi);
	echo $array1[$i]," / ",$array2[$i]," = ",$arraydivi[$i];
	echo "<br>";}
?>