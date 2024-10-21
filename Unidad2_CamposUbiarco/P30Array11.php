<?php
/*  CBTIS 89
	P30Array11.php
	Programa que muestra la herramienta para agregar más datos a un array ya hecho
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
   $array_numerico_indexado = array(1, "Gato", 2, "Perro");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }

   array_push($array_numerico_indexado, 3, "Caballo");

   foreach($array_numerico_indexado as $mascota){
      echo $mascota . " <BR>";
   }
?>