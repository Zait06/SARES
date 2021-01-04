<?php
$Host ="LocalHost";
$usuario ="root";
$contra="";
$bd="SARES";

$liga = mysql_connect($Host,$usuario,$contra) 
or die ("no se ha podido conectar"); 

mysql_select_db($bd,$liga) 
or die("Error al tratar de selecccionar esta base"); 
?> 