<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
	include("conection.php");
	$tarje=$_GET['num_tarjeta'];  
	$hor=mysql_query("select * from $tarje",$liga);
	echo "<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>";
	echo "<TR><TD>Fecha</TD><TD>Hora de entrada</TD><TD>Hora de salida</TD></TR>";
		while($row = mysql_fetch_array($hor))
		{
			printf("<tr><td><center>&nbsp;%s</center></td> <td>&nbsp;%s&nbsp;</td> <td>&nbsp;%s&nbsp;</td></tr>", 
       $row["dia"],$row["hoen"],$row["hosa"]);
		}
?>
</body>
</html>