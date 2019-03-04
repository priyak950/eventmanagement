<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
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
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
					<div class="content1">
					
						<h3 > View Customer Details</h3><br>
						<?php 
	include"database.php";
	
	$sql="SELECT * FROM registration ";
	$res=$db->query($sql);
		echo "<table border='1px' class='table'>
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>View</th>
					<th>Delete</th>
				</tr>
				";
	if($res->num_rows>0)
		
	{
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo "<tr>
				<td>{$i}</td>
				<td>{$row["NAME"]}</td>
				<td>{$row["EMAIL"]}</td>
				<td>{$row["ADDRESS"]}</td>
				<td><a href='customer_view.php?id={$row["ID"]}' class='btnb'>View</a></td>
				<td><a href='customer_delete.php?id={$row["ID"]}' class='btnr'>Delete</a></td>
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