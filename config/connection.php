<?php  
error_reporting(0);
$dbc=mysqli_connect("localhost","root","","uis_db");
if(!$dbc){
	echo "database not connected<br>";
}

?>