<?php
	include"database.php";
	session_start();
	
	$s="delete from booking where BID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('add_booking.php?mes=Data Deleted.','_self');</script>"
?>