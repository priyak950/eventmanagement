<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["ID"]))
	{
		echo"<script>window.open('index1.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Event</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	
	<body>
			<?php include"navbar.php";?><br>
			<img src="img/1.jpeg" style="margin-left:90px;" class="sha">
				
				<div id="section">
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
					
					<div class="content1">
					
						<h3 > View Booking Details</h3><br>
						<?php 
	
	
	$sql="SELECT booking.*, package.* FROM booking JOIN package ON booking.PID=package.PID ";
	$res=$db->query($sql);
		echo "<table border='1px' class='table'>
				<tr>
					<th>S.No</th>
					<th>Booking id</th>
					<th>Package id</th>
					<th>Person</th>
					<th>Total Amount</th> 
					<th>Delete</th>
				</tr>
				";
	if($res->num_rows>0)
		
	{
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			$p=$row["person"];
			$r=$row["price"];
			$pr=$p*$r;
			echo "<tr>
				<td>{$i}</td>
				<td>{$row["BID"]}</td>
				<td>{$row["PID"]}</td>
				<td>{$row["person"]}</td>
				<td>$pr</td>
				<td><a href='delete2.php?id={$row["BID"]}' class='btnr'>Cancel</a></td>
				</tr>
			";
		}
				echo "</table>";
	}
		
	else
	{
		echo "<p>No Record Found</p>";
	}
	
?>
						
	</body>
</html>