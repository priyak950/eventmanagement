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

						<h3 > Add booking Details</h3><br>
						<?php
							if(isset($_POST["submit"]))
							{
									
								$sq="insert into booking(PID,Cname,person) values ('{$_POST["project"]}','{$_POST["id"]}','{$_POST["tname"]}')";
								if($db->query($sq))
								{
									echo "<div class='success'>Insert Success..</div>";
								}
								else
								{
									echo "<div class='error'>Insert Failed..</div>";
								}

						
							}
						?>
						
						<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						<label>Enter your name </label><br>
						   <input type="text" name="id" required class="input">	<br>	
						<label>Package Number <br>(enter from url package number)</label><br>
						   <input type="text" name="project" required class="input">							

						   <label>Number of Person </label><br>
						   <input type="text" name="tname" required class="input">
						   <button type="submit" class="btn" name="submit">Booking</button>
						</form>
				
				
					</div>
				
				
				<div class="tbox" >
					<h3 style="margin-top:30px;"> Your Booking Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Booking ID</th>
							<th>No.of Person</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from booking";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
										<td>{$i}</td>
										<td>{$r["BID"]}</td>
										<td>{$r["person"]}</td>		
										<td><a href='delete1.php?id={$r["BID"]}' class='btnr'>Cancel</a></td>
										</tr>
									
									";
									
								}
								
							}
							else
							{
								echo "No Record Found";
							}
						?>
						
					</table>
				</div>
			</div>
	
				
	</body>
</html>