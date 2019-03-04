<?php
	include"database.php";
	session_start();
	$s="delete from registration where ID={$_GET["id"]}";
	$db->query($s);
	echo"<script>window.open('view_customer.php','_self');</script>";

?>