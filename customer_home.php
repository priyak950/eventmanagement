<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["ID"]))
	{
		echo"<script>window.open('customer_login.php?mes=Access Denied...','_self');</script>";
		
	}	
	
	
	$sql="SELECT * FROM registration WHERE ID={$_SESSION["ID"]}";
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
	
			<div id="section">
				<?php include"sidebar.php";?><br>
					<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Add Profile</h3><br>
					<div class="lbox1">
					<?php
						if(isset($_POST["submit"]))
						{
							$target="img/";
							$target_file=$target.basename($_FILES["img"]["name"]);
							
							if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file))
							{
								$sql="update registration set PHONE='{$_POST["pno"]}',EMAIL='{$_POST["mail"]}',ADDRESS='{$_POST["addr"]}',IMAGE='{$target_file}'where ID={$_SESSION["ID"]}";
								$db->query($sql);
								echo "<div class='success'>Insert Success</div>";
							}
							
						}
					
					
					?>
					
					
					
					
						
					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
							<label>  Phone No</label><br>
							<input type="text" maxlength="10" required class="input3" name="pno"><br><br>
							<label>  E - Mail</label><br>
							<input type="email"  class="input3" required name="mail"><br><br>
							<label>  Address</label><br>
							<textarea rows="5" name="addr"></textarea><br><br>
							<label> Image</label><br>
							<input type="file"  class="input3" required name="img"><br><br>
						<button type="submit" class="btn" name="submit">Add Profile Details</button>
						</form>
					</div>
					
					
					
					
					<div class="rbox1">
					<h3> Profile</h3><br>
						<table border="1px">
							<tr><td colspan="2"><img src="<?php echo $row["IMAGE"] ?>" height="100" width="100" alt="upload Pending"></td></tr>
							<tr><th>Name </th> <td><?php echo $row["NAME"] ?> </td></tr>
							<tr><th>User name </th> <td><?php echo $row["USERNAME"] ?>  </td></tr>
							
							<tr><th>Phone No </th> <td> <?php echo $row["PHONE"] ?> </td></tr>
							<tr><th>E - Mail </th> <td> <?php echo $row["EMAIL"] ?> </td></tr>
							<tr><th>Address </th> <td> <?php echo $row["ADDRESS"] ?> </td></tr>
						</table>
					</div>
				</div>
			</div>
	
				
	</body>
</html>