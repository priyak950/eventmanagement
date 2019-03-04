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
	
			<div id="section">
				<?php include"sidebar.php";?><br>
					<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>View package</h3><br>
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="lbox1">	
					
						<label>DATE</label><br>
						<input type="date" min="2018-11-14" name="date" required class="input3">
				</div>
				<div class="rbox">
					<label>categories</label><br>
					<select name="cla" required class="input3">
				
						<?php 
							 $sl="SELECT DISTINCT(CNAME) FROM package";
							$r=$db->query($sl);
								if($r->num_rows>0)
									{
										echo"<option value=''>Select</option>";
										while($ro=$r->fetch_assoc())
										{
											echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
										}
									}
						?>
					
					</select>
					<br><br>
				</div>
					<button type="submit" class="btn" name="view"> View Details</button>
				
					</form>
					<br>
					
					<div class="Output">
						<?php
							if(isset($_POST["view"]))
							{
								echo "<h3>Package Time</h3><br>";
								$sql="select * from package where date='{$_POST["date"]}' and CNAME='{$_POST["cla"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo '
										<table border="1px">
											<tr>
												<th>P.NO</th>
												<th>Date</th>
												<th>Categories</th>
												<th>THEME</th>
												<th>Venue</th>
												<th>View</th>
												<th>Booking</th>
											</tr>
											';
											
											
											while($r=$re->fetch_assoc())
											{
												
												echo"
													<tr>
														<td>{$r["PID"]}</td>
														<td>{$r["date"]}</td>
														<td>{$r["CNAME"]}</td>
														<td>{$r["TNAME"]}</td>
														<td>{$r["Location"]}</td>
														<td><a href='package_view.php?pid={$r["PID"]}' class='btnb'>View</a></td>
														<td><a href='add_booking.php?pid={$r["PID"]}' class='btnr'>booking</a></td>
													
													</tr>
												
												";
												
												
												
											}
								}
								else
								{
									echo "No Record Found";
								}
								echo "</table>";
								
							}
						
						
						?>
					
					</div>
				</div>
			</div>
	
			
	</body>
</html>