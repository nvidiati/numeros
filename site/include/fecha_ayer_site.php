<?php
 
$dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
$dn = date('d')-1;
echo $dias[date('w')-1]." ".$dn." de ".$meses[date('n')-1]. " del ".date('Y') ;

//Salida: Viernes 24 de Febrero del 2012
 
?>