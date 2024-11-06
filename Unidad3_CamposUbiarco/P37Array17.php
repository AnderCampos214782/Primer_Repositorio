<?php
/*  CBTIS 89
	P37Array17.php
	Programa que muestra un arreglo de números negativos y positivos, además de sumarlos
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$arraynumeros=array(45,-23,67,-12,36,-89,58,-31,90,-72,-34,78,-49,35,-12);
$arraypositivos=array();
$arraynegativos=array();

$longitud=count($arraynumeros);

$negativos=0;
$positivos=0;
$totalpositivos=0;
$totalnegativos=0;


for ($i=0;$i<$longitud;$i++)
	{if ($arraynumeros[$i]<0)
		{$negativos=$arraynumeros[$i];
			array_push($arraynegativos,$arraynumeros[$i]);}
	 if ($arraynumeros[$i]>0)
			{array_push($arraypositivos,$arraynumeros[$i]);}
	}
$longitud2=count($arraypositivos);
echo "Números positivos","<p>";
for ($i=0;$i<$longitud2;$i++)
	{echo $arraypositivos[$i],"<br>";}

echo "Números negativos","<p>";
for ($i=0;$i<$longitud;$i++)
	{echo $arraypositivos[$i],"<br>";}

for ($i=0;$i<$longitud;$i++)
	{$totalpositivos=$totalpositivos+$arraypositivos[$i];
	$totalnegativos=$totalnegativos+$arraynegativos[$i];
		}


echo "El resultado de la suma es: ",$positivos;

echo "El resultado de la suma es: ",$negativos;
?>