<?php
/*  CBTIS 89
	P39Array19.php
	Programa que almacena información de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo a las siguientes condiciones:
	-Si la persona es menor de 18 años se debe colocar un 1 en el arreglo $grupo1 y en los otros dos colocar un 0.
	-Si la persona tiene entre 18 y 49 años se debe colocar un 1 en el arreglo $grupo2 y en los otros dos colocar un 0.
	-Si la persona tiene 50 años o más se debe colocar un 1 en el arreglo $grupo3, y en los otros dos un 0.
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/

$nombres=array("Max","Paco","Uriel","Pedro","Javier","Lalo");
$edad=array(50,10,34,50,12,58);
$grupo1=array();
$grupo2=array();
$grupo3=array();

$longitud=count($edad);

for ($i=0;$i<$longitud;$i++)
	{
		if ($edad[$i]<18)
		{array_push($grupo1,1);
			array_push($grupo2,0);
			array_push($grupo3,0);}

		if ($edad[$i]>=18&&$edad[$i]<50)
			{array_push($grupo1,0);
		array_push($grupo2,1);
			array_push($grupo3,0);}

		if ($edad[$i]>=50)
			{array_push($grupo1,0);
			array_push($grupo2,0);
		array_push($grupo3,1);}
}
echo "CBTIS 89","<br>";
echo "Nombre","----","Grupo1","----","Grupo2","----","Grupo3","<br>";
for ($i=0; $i<$longitud;$i++) { 
	echo $nombres[$i],"----------",$grupo1[$i],"-------------",$grupo2[$i],"-------------",$grupo3[$i],"<br>";

	}

?>