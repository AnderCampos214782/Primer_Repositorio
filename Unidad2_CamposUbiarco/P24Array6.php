<?php
/*  CBTIS 89
	P24Array6.php
	Programa que almacena datos en un arreglo y posteriormente los imprime
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
$datos = array("Santiago"=>"Construcción"=>"plantel","David"=>"Trabajo Social","Carolina"=>"Análisis Clínicos","Diego"=>"Electrónica","Pepe"=>"Mecatrónica");

echo "** LISTA DE ALUMNOS **","<br>","<br>";

foreach($datos as $nombre=>$especialidad)
	{echo "El alumno ". $nombre. " estudia la carrera de ". $especialidad. " en el plantel del ";
	echo "<br>","<br>";
}

/*
<?php
/*  CBTIS 89
	P24Array6.php
	Programa que almacena datos en un arreglo y posteriormente los imprime
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*
$datos = array("CBTIS 89"=>"Santiago"=>"Construcción","CBTIS 110"=>"David"=>"Trabajo Social","CBTIS 130"=>"Carolina"=>"Análisis Clínicos","CBTIS 110"=>"Diego"=>"Electrónica","CBTIS 89"=>"Pepe"=>"Mecatrónica");

echo "** LISTA DE ALUMNOS **","<br>","<br>";

foreach($datos as $plantel=>$nombre=>$especialidad)
	{echo "El alumno ". $nombre. " estudia la carrera de ". $especialidad. " en el plantel del ". $plantel;
	echo "<br>","<br>";
}

*/
?>