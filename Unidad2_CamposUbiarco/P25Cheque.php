<?php
/*  CBTIS 89
	P25Cheque.php
	Programa que determina de cuántos billetes hay en un cheque
	Ander Tadeo Campos Ubiarco
	3°A Programación Matutino
*/

$cheque=5793;
echo "El chaque vale por ",$cheque," pesos";echo "<br>";
$B1000=floor($cheque/1000);
$cheque=$cheque%1000;echo "<br>";
echo "La cantidad de billetes de mil pesos es: ",$B1000;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$B500=floor($cheque/500);
$cheque=$cheque%500;
echo "La cantidad de billetes de quinientos pesos es: ",$B500;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$B200=floor($cheque/200);
$cheque=$cheque%200;
echo "La cantidad de billetes de doscientos pesos es: ",$B200;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$B100=floor($cheque/100);
$cheque=$cheque%100;
echo "La cantidad de billetes de cien pesos es: ",$B100;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$B50=floor($cheque/50);
$cheque=$cheque%50;
echo "La cantidad de billetes de cincuenta pesos es: ",$B50;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$B20=floor($cheque/20);
$cheque=$cheque%20;
echo "La cantidad de billetes de veinte pesos es: ",$B20;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$M10=floor($cheque/10);
$cheque=$cheque%10;
echo "La cantidad de monedas de diez pesos es: ",$M10;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$M5=floor($cheque/5);
$cheque=$cheque%5;
echo "La cantidad de monedas de cinco pesos es: ",$M5;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$M2=floor($cheque/2);
$cheque=$cheque%2;
echo "La cantidad de monedas de dos pesos es: ",$M2;echo "<br>";
echo "<br>",$cheque;echo "<br>";
$M1=$cheque/1;
echo "La cantidad de monedas de un peso es: ",$M1;echo "<br>";












?>