<?php
	include"database.php";
	session_start();
	
	$s="delete from categories where CID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('add_categories.php?mes=Data Deleted.','_self');</script>"
?>