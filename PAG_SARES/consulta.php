<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Servicio Administrativo de Registro de Entrad y Salida</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">   
  </head>
  <body>
<div class="pen-title">
  <h1>Servicio Administrativo de Registro de Entrada y Salida</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title"><center>BIENVENIDO A "SARES"</h1>
    <center>
<?php
    $usu=$_REQUEST['id'];
	$con=$_REQUEST['pass'];
	include("conection.php");
	$ini=mysql_query("select contra from capital where usuario='$usu'",$liga);
	$row = mysql_fetch_array($ini);
	if ($con==$row['contra'])
	{
		$profe=mysql_query("select * from profesores",$liga);
		echo "<h5>Profesores</h5><br>";
		echo "	<TABLE BORDER=1 bordercolor=#FF3366 CELLSPACING=1 CELLPADDING=1>";
		echo "<TR><TD>Numero de Tarjeta</TD><TD>Nombre</TD><TD>Turno</TD><TD>Area</TD><TD>Horas</TD></TR>";
		while($row = mysql_fetch_array($profe))
		{
			printf("<tr><td><center>&nbsp;%s</center></td> <td>&nbsp;%s&nbsp;</td> <td>&nbsp;%s&nbsp;</td> <td>&nbsp;%s&nbsp;</td> <td><a href=\"horario.php?num_tarjeta=%s\">Consulta</a></td></tr>", 
       $row["num_tarjeta"],$row["nombre"],$row["turno"],$row["area"],$row["num_tarjeta"]);
		}
		echo"</TABLE>";
		$apoyo=mysql_query("select * from apoyo",$liga);
		echo "<br><br><h5>Personal de apoyo</h5><br>	<TABLE BORDER=2 bordercolor=#FF3366 CELLSPACING=2 CELLPADDING=2>";
		echo "<TR><TD>Numero de Tarjeta</TD><TD>Nombre</TD><TD>Turno</TD><TD>Area</TD><TD>Horas</TD></TR>";
		while($row = mysql_fetch_array($apoyo))
		{
			printf("<tr><td><center>&nbsp;%s</center></td> <td>&nbsp;%s&nbsp;</td> <td>&nbsp;%s&nbsp;</td> <td>&nbsp;%s&nbsp;</td> <td><a href=\"horario.php?num_tarjeta=%s\">Consulta</a></td></tr>", 
       $row["num_tarjeta"],$row["nombre"],$row["turno"],$row["area"],$row["num_tarjeta"]);
		}
		echo"</TABLE>";
	}
	mysql_free_result($profe); 
   mysql_close($liga); 
?>
</center>
  </div>
</div>
  </body>
</html>