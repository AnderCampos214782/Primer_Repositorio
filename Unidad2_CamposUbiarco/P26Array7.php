<?php
/*  CBTIS 89
	P26Array7.php
	Programa que muestra un arreglo multidimensional
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/
   $datos = array(
   array(0, 0, 0),array(1, 1, 1),array(2, 2, 2));

   foreach($datos as $datos2){
      foreach($datos2 as $dato){
         echo "$dato ";
      }
      echo "<br>"; 
   }
?>