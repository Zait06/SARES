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
	include("conection.php");
	$tarje=$_GET['num_tarjeta'];  
	$hor=mysql_query("select * from $tarje",$liga);
	echo "$tarje";
	echo "<TABLE BORDER=2 CELLSPACING=2 CELLPADDING=2 bordercolor=#FF3366>";
	echo "<TR><TD>Fecha</TD><TD>Hora de entrada</TD><TD>Hora de salida</TD></TR>";
		while($row = mysql_fetch_array($hor))
		{
			printf("<tr><td align=left>&nbsp;%s</td> <td>                 &nbsp;%s&nbsp;</td> <td> &nbsp;%s&nbsp;</td></tr>", 
       $row["dia"],$row["hoen"],$row["hosa"]);
		}
		echo "</TABLE>";
		mysql_free_result($hor); 
   mysql_close($liga); 
?>
<br><br><br>
<div class="button-container">
        <button><a href="consulta.php" style="text-decoration:none"><span>REGRESAR</span></a></button>
      </div>
	</center>
  </div>
</div>
  </body>
</html>