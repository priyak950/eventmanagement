<?php
	include"database.php";
	session_start();
	
	$s="insert into booking(PID,ID) values ('{$_GET["id"]}', '{$_GET["pid"]}')";
	$db->query($s);
	echo "<script>window.open('add_booking.php?mes=Data Deleted.','_self');</script>"
?>