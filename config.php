<?php
//error_reporting(0);
$con=new mysqli("localhost","root","","event");
		// Server name,User Name,Password,Database Name

if($con->connect_error)
{
	echo $con->connect_error;
	die("Sorry Database Connection Failed");
}
//else
//{
	// echo "database connected";
//}
?>