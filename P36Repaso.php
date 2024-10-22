<?php
/* CBTIS 89
	P36Repaso.php
	Programa que hace operaciones matemáticas entre arreglos con datos numéricos aleatorios del 1 al 30 usando ciclo for.
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
//Se declaran variables donde se guardarán los resultados
$suma=0;
$resta=0;
$multi=0;
$divi=0;

//Se hacen los arreglos
$array1=array();
$array2=array();
$array3=array();
$array4=array();
$array5=array();
$array6=array();
$array7=array();
$array8=array();
$arraysum=array();
$arrayres=array();
$arraymult=array();
$arraydivi=array();

echo "Operaciones aritméticas utilizando arreglos","<p>";
echo "Suma de arreglos","<br>";
//Ciclo for que decide el número a operar
	for ($i=0;$i<5;$i++)
{//Se añaden números aleatorios a los arreglos que se operarán.
array_push($array1,rand(1,30));
array_push($array2,rand(1,30));
//Se hace la operación de los arreglos.
$suma=$array1[$i]+$array2[$i];
//El resultado de la operación se añade a otro arreglo diferente.
array_push($arraysum,$suma);
//Se imprime la operación para mostrarla al ejecutarse.
echo $array1[$i], " + ",$array2[$i]," = ",$arraysum[$i];
echo "<br>";}


echo "<br>","Resta de arreglos","<br>";
//Ciclo for que decide el número a operar
	for ($i=0;$i<5;$i++)
{//Se añaden números aleatorios a los arreglos que se operarán.
array_push($array3,rand(1,30));
array_push($array4,rand(1,30));
//Se hace la operación de los arreglos.
$resta=$array3[$i]-$array4[$i];
//El resultado de la operación se añade a otro arreglo diferente.
array_push($arrayres,$resta);
//Se imprime la operación para mostrarla al ejecutarse.
echo $array3[$i], " - ",$array4[$i]," = ",$arrayres[$i];
echo "<br>";}


echo "<br>","Multiplicación de arreglos","<br>";
//Ciclo for que decide el número a operar
	for ($i=0;$i<5;$i++)
{//Se añaden números aleatorios a los arreglos que se operarán.
array_push($array5,rand(1,30));
array_push($array6,rand(1,30));
//Se hace la operación de los arreglos.
$multi=$array5[$i]*$array6[$i];
//El resultado de la operación se añade a otro arreglo diferente.
array_push($arraymult,$multi);
//Se imprime la operación para mostrarla al ejecutarse.
echo $array5[$i], " x ",$array6[$i]," = ",$arraymult[$i];
echo "<br>";}


echo "<br>","División de arreglos","<br>";
//Ciclo for que decide el número a operar
	for ($i=0;$i<5;$i++)
{//Se añaden números aleatorios a los arreglos que se operarán.
array_push($array7,rand(1,30));
array_push($array8,rand(1,30));
//Se hace la operación de los arreglos.
$divi=$array7[$i]/$array8[$i];
//El resultado de la operación se añade a otro arreglo diferente.
array_push($arraydivi,$divi);
//Se imprime la operación para mostrarla al ejecutarse.
echo $array7[$i], " / ",$array8[$i]," = ",$arraydivi[$i];
echo "<br>";}

?>