
 <!-- connect to databse  -->
<?php

$db= mysqli_connect("localhost","root", "", "bank");

if(!$db){

	die("Connection failed".mysqli_connect_error());
}


?>
