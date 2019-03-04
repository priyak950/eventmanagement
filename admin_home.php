<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index1.php?mes=Access Denied..','_self');</script>";
		
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
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Event Management</h3><br>
					<img src="img/home.jpeg" class="imgs">
					<p class="para">
						Event Management System is a is a complete event management software designed to automate a event's diverse operations from categories, theme to  events calendar. 
					</p>
					
					<p class="para">
						Our aim is to make a user friendly application that can let a user to plan a decoration for an event. He can select the event and according to the event the appropriate decoration can be made. Choice of decoration can be made from the list of panel. Client will also find out the cost for particular decoration and virtual representation of that particular decoration.
					</p>
				</div>
				
			</div>
	
	
	</body>
</html>