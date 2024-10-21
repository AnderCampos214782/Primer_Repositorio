<?php
/*  CBTIS 89
	P22Array4.php
	Programa que almacena datos en un arreglo y posteriormente los imprime
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$equipo = array("Portero"=>"Julio","Defensa"=>"Diego","Medio"=>"Jair","Delantero"=>"Rafa");
echo "** SELECCIÓN NACIONAL **","<br>","<br>";
foreach($equipo as $posicion=>$jugador)
	{echo "El jugador ". $jugador. " es el ". $posicion;
echo "<br>","<br>";
}
?>