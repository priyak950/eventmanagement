<?php
	include"database.php";
	session_start();
	
	$s="delete from booking where BID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('booking.php?mes=Data Deleted.','_self');</script>"
?>