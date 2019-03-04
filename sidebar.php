<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">Event Information</a></li>
			<li class="li"><a href="add_categories.php"> Categories</a></li>
			<li class="li"><a href="add_theme.php"> Theme</a></li>

			
			<li class="li"><a href="view_customer.php">View customer</a></li>
			<li class="li"><a href="set_package.php">Set package</a></li>
			<li class="li"><a href="add_services.php">Services</a></li>
			<li class="li"><a href="customer1_booking.php">Booked Event</a></li>
			<li class="li"><a href="view_feedback.php"target="_blank"> View Feedback</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	else{
		echo'
			<li class="li"><a href="customer_home.php">Profile</a></li>
			<li class="li"><a href="view_package.php">View Package</a></li>
			<li class="li"><a href="booking.php">Booking</a></li>
			<li class="li"><a href="feedback.php">Feedback</a></li>

			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}


?>
	

</ul>

</div>