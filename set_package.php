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
				
				<div class="content">
					
						<h3 >Set Event Package Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							$target="img/";
							$target_file=$target.basename($_FILES["img"]["name"]);
							
							if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)){
								
							$sql="insert into package(Location,price,date,description,CNAME,TNAME,IMG) values ('{$_POST["maxp"]}','{$_POST["etype"]}','{$_POST["edate"]}','{$_POST["description"]}','{$_POST["cla"]}','{$_POST["sub"]}','{$target_file}')";
							
							$db->query($sql);
								echo "<div class='success'>Insert Success</div>";
							}
						}
					?>
			
					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					<div class="lbox">
						<label> Venue</label><br>
							<input type="text" class="input3" name="maxp"><br><br>
						<label> Price</label><br>
							<select name="etype" required class="input3">
						       <option value="">Select</option>
						       <option value="1000">1000</option>
						       <option value="5000">5000</option>
						       <option value="7000">7000</option>
						       <option value="2000">2000</option>
						       <option value="3000">3000</option>

							</select>
					<br><br>
					
					<label> Event Date</label><br>
						<input type="date" min="2018-11-14" class="input5" name="edate"><br><br>
						<br><br>
					<label> Image</label><br>
							<input type="file"  class="input3" required name="img"><br><br>
					
				</div>
				
				<div class="rbox">
					<label>Description</label>
						<textarea rows="5" name="description"></textarea><br><br>
					<br><br>
					
					
					<label>Categories</label>
					<select name="cla" required class="input3">
						<?php
							$sl="select DISTINCT(CNAME) from categories";
							$r=$db->query($sl);
							if($r->num_rows>0)
							{
								echo 	"<option value=''>Select</option>";
								while($ro=$r->fetch_assoc())
								{
									echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
								}
								
							}
						?>	
						
					</select>
					
					<br><br>
					
					
					<label>Theme</label><br>
					<select name="sub" required class="input3">
						<?php
							$s="select * from theme";
							$re=$db->query($s);
							if($re->num_rows>0)
							{
								echo "<option value=''>select</option>";
								while($r=$re->fetch_assoc())
								{
									echo "<option value='{$r["TNAME"]}'>{$r["TNAME"]}</option>";
								}
							}
						?>
						
					</select>
					<br><br>
				</div>
					<button type="submit" class="btn" name="submit">Add Package Details</button>
				</form>
				
				
				</div>
				
				
			</div>
	
	</body>
</html>