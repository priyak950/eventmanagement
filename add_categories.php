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
		<title>EVENT</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/1.jpeg" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Categories Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into categories(CNAME) values('{$_POST["cname"]}')";
							if($db->query($sq))
							{
								echo "<div categories='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div categories='error'>Insert failed..</div>";
							}
							
							
						}
					
					?>
						
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Categories Name</label><br>
				<select name="cname"  required class="input2">
						<option value="">Select</option>
						<option value="parties">parties</option>
						<option value="health and wellness">health and wellness</option>
						<option value="classes and workshop">classes and workshop</option>
						<option value="nature and park">nature and park</option>
					
						
					</select><br><br>
					
					
					<button type="submit" class="btn" name="submit">Add Categories Details</button>
				</form>
				
				
				</div>
				
				
				<div class="tbox">
					<h3 style="margin-top:30px;"> Categories Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Categories Name</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from categories";
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
											<td>{$r["CNAME"]}</td>
											<td><a href='delete.php?id={$r["CID"]}' class='btnr'>Delete</a></td>
										</tr>
										";
									
								}
								
							}
						?>
					
					</table>
				</div>
			</div>
	
				
	</body>
</html>