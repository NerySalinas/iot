<?php
include 'bd_controller_local.php';
$t = mysqli_real_escape_string($conn, $_REQUEST['tem']);
$h = mysqli_real_escape_string($conn, $_REQUEST['hum']);
$r = mysqli_real_escape_string($conn, $_REQUEST['rie']);


if($conn->connect_error) 
{
	die("Error:".$conn->connect_error);
}

$sql = "INSERT INTO registro(IDRegistro, Fecha, Tem, Hum, Riego) values (NULL, now(), '$t', '$h', '$r')";

if ($conn->query($sql)===TRUE)
	{
		echo "agregado correctamente";
	}
else
	{
		echo "Error:".$sql."<br>".$conn->error;
	}
$conn->close();

?>