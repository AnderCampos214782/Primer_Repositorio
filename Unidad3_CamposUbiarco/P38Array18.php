<?php
/*  CBTIS 89
	P38Array18.php
	Programa que almacena datos en un arreglo multidimensional y posteriormente los imprime en diferentes posiciones
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/

$datos=array(array(10,20,30),array(40,50,60),array(70,80,90));

echo "Normal";
echo "<br>";
for($i=0;$i<3;$i++)
	{ for($j=0;$j<3;$j++)
		{echo $datos[$i][$j]. " ";
		}
		echo "<br>";}

echo "<br>","Filas a columnas";
echo "<br>";
for($i=0;$i<3;$i++)
	{ 
		for($j=0;$j<3;$j++)
		{
		echo $datos[$j][$i]. " ";
		}
	echo "<br>";
	}

echo "<br>","Columnas inversas";
echo "<br>";
for($i=0;$i<3;$i++)
	{ 
		for($j=2;$j>=0;$j--)
		{
		echo $datos[$i][$j]. " ";
		}
	echo "<br>";
	}

echo "<br>","Filas inversas";
echo "<br>";
for($i=0;$i<3;$i++)
	{ 
		for($j=2;$j>=0;$j--)
		{
		echo $datos[$j][$i]. " ";
		}
	echo "<br>";
	}

echo "<br>","Espejo inverso";
echo "<br>";
for($i=2;$i>=0;$i--)
	{ 
		for($j=2;$j>=0;$j--)
		{
		echo $datos[$i][$j]. " ";
		}
	echo "<br>";
	}
	echo "<br>","Espejo con filas invertidas";
echo "<br>";
for($i=2;$i>=0;$i--)
	{ 
		for($j=2;$j>=0;$j--)
		{
		echo $datos[$j][$i]. " ";
		}
	echo "<br>";
	}
?>