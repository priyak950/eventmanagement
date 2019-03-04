<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Event Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/b1.jpeg" width="800">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					EVENT MANAGER<BR>
					Sapthagiri girl hostel,<BR>
					Chikksandra,<BR>
					heserbhatt,pincode-800008<BR>
					Mail - sathagirigirlhostel@gmail.com<br>Phone - 99017-42208
				</form>
			</div>
		</div>
		
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>