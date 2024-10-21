<?php
/*  CBTIS 89
	P27Array8.php
	Programa que muestra un arreglo bidimensional
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$arraypar=array(1);
$arrayimpar=array(1);

for ($i=1;$i<=100;$i++)
	{$resi=$i%2;
		array_push($arraypar,$i);
	if ($resi==0)
		{echo $arraypar[$i],"<br>";
		}
	}
for ($j=1;$j<=100;$j++)
	{$resi1=$j%2;
	array_push($arrayimpar,$j);
		if($resi1!=0)
		{echo "<br>",$arrayimpar [$j];}
}

?>