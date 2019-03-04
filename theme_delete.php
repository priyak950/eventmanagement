<?php
	include "database.php";
	session_start();
	$s="delete from theme where TID={$_GET["id"]}";
	$db->query($s);
	echo "<script>window.open('add_theme.php?mes=Data Deleted..','_self');</script>";
?>