<?php
/* CBTIS 89
	Examen3CamposUbiarco.php
	Programa que almacena el nombre de cuatro personas en un arreglo $Alumnos y en otro arreglo multidimensional llamado $Calificaciones almacena las calificaciones de cada uno de ellos por medio de filas y columnas.
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
	$Alumnos=array("Luz","Fer","Leo","Ale");
	$Calificaciones=array(array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));
	$Promedio=array();
	$Status=array();
	
	echo "CBTIS 89","<br>","Alumnos---","---Promedio---","---Status ","<br>";
	for ($i=0; $i<4; $i++) { 
			for ($j=0; $j<3; $j++) { 	
			$prom=$Calificaciones[$i][0]+$Calificaciones[$i][1]+$Calificaciones[$i][2];
			$Promedio[$i]=$prom/3;
	}
	}
for ($i=0; $i<4; $i++) { 

		for ($j=0; $j<3; $j++) { 
		if ($Promedio[$i]<6) {
			$Status[$i]="Reprobado";
		} else if ($Promedio[$i]>=6){
			$Status[$i]="Aprobado";
		}

}
echo $Alumnos[$i],"------------------",$Promedio[$i],"----------",$Status[$i],"<br>","";
}
echo "<br>","Calificaciones","<br>";
for ($i=0; $i<4; $i++) { 
	for ($j=0; $j<3; $j++) { 
		echo " - ",$Calificaciones[$i][$j]," - ";
	}
	echo "<br>";
}
	?>