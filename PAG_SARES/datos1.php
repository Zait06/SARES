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
    <h1 class="title">DATOS</h1>
  <?php
     include("conection.php"); 
   
   $nom=$_GET['nombre']; 
   $contra=$_GET['contra'];
   $num_tarjeta=$_GET['num_tarjeta'];  
   $area=$_GET['area']; 
   $turno=$_GET['turno'];
   $insertar = "insert into apoyo (num_tarjeta,nombre,contra,turno,area) values ('$num_tarjeta','$nom',$contra,'$turno','$area')";
   $crear="create table $num_tarjeta(dia varchar(100),hoen varchar(100),hosa varchar(100))";

if (mysql_query($insertar) and mysql_query($crear))
            {
             echo "<center><P><H1>Por favor, revise sus datos $nom<center></P></center><br><br>";
			 echo "<table border=10>";
echo "<table border>";
echo "<TR>";
	echo "<td>Nombre: </td>";
	echo "<td>".$_REQUEST['nombre']."</td>";
echo "</TR>";
echo "<TR>";
	echo "<td>Contraseña: </td>";
	echo "<td>".$_REQUEST['contra']."</td>";
echo "</TR>";
echo "<TR>";
	echo "<td>Num. de Tarjeta: </td>";
echo "<td>".$_REQUEST['num_tarjeta']."</td>";
echo "</TR>";
echo "<TR>";
	echo "<td>Area: </td>";
echo "<td>".$_REQUEST['area']."</td>";	
echo "</TR>";
echo "<TR>";
	echo "<td>Turno: </td>";
	echo "<td>".$turno."</td>";
echo "</TR>";
echo "</table>";}
          else
            {
               echo "<P>Se ha producido un error en el registro $nom</P>";
            }
         
          
		  echo "</font>";
?>
<br><br>
¿Esta seguro de seguir con el resgistro?
<form method="get">
<input type="button" value="SI" onclick=window.location.href="empecemos.php">
<input type="button" value="NO" onclick=window.location.href="index.html">
<?
$borra="delete from apoyo where nombre=$nom";
if (isset($_GET['NO']))
{
	if (mysql_query($borra))
	{
		mysql_close($liga);
	}
}
?>
</form>
  </div>
</div>
  </body>
</html>