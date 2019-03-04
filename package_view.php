<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["ID"]))
	{
		echo"<script>window.open('index1.php?mes=Access Denied...','_self');</script>";
		
	}
	$sql="SELECT * FROM package WHERE PID={$_GET["pid"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
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
					
						<h3 > View Package Details</h3><br>
						<div class="ibox">
							<img src="<?php echo $row["IMG"]; ?>" height="230" width="230">
							
						</div>
						<div class="tsbox">
						<table border="1px">
							<tr><th>Venue </th> <td> <?php echo $row["Location"]; ?></td></tr>
							<tr><th>Price </th> <td> <?php echo $row["price"]; ?></td></tr>
							<tr><th>Date </th> <td> <?php echo $row["date"]; ?></td></tr>
							<tr><th>Description </th> <td> <?php echo $row["description"]; ?></td></tr>
							<tr><th>Categories </th> <td> <?php echo $row["CNAME"]; ?></td></tr>
							<tr><th>Theme </th> <td> <?php echo $row["TNAME"]; ?></td></tr>
							
						</table>
						</div>
				</div>	
			</div>
		
			
	</body>
</html>