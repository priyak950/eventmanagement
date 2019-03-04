<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index1.php?mes=Access Denied...','_self');</script>";
		
	}
	$sql="SELECT * FROM registration WHERE ID={$_GET["id"]}";
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
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > View Customer Details</h3><br>
						<div class="ibox">
							<img src="<?php echo $row["IMAGE"]; ?>" height="230" width="230">
							
						</div>
						<div class="tsbox">
						<table border="1px">
							<tr><th>Name </th> <td> <?php echo $row["NAME"]; ?></td></tr>
							<tr><th>UserName </th> <td> <?php echo $row["USERNAME"]; ?></td></tr>
							<tr><th>Email </th> <td> <?php echo $row["EMAIL"]; ?></td></tr>
							<tr><th>Address </th> <td> <?php echo $row["ADDRESS"]; ?></td></tr>
							<tr><th>Phone No </th> <td> <?php echo $row["PHONE"]; ?></td></tr>
							
							
						</table>
						</div>
				</div>	
			</div>
		
			
	</body>
</html>