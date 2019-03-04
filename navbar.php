<div class="navbar">

			<ul class="list">
				<b style="color:white;float:left;line-height:50px;margin-left:15px;font-family:Cooper Black;">
				Event Management System</b>
			<?php
				if(isset($_SESSION["AID"]))
				{
					echo'
				
						<li><a href="admin_home.php">Admin Home</a></li>
				<li><a href="change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["ID"]))
				{
					echo'
				
						<li><a href="customer_home.php">Customer Home</a></li>
				<li><a href="customer_change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				else{
					echo'
					
					<li><a href="index1.php">Admin</a></li>
				<li><a href="customer_login.php">Customer</a></li>
				<li><a href="contact.php">Contact Us</a></li>';
				}
			?>
				
			</ul>
		</div>
		