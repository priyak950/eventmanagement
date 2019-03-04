<?php
	include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>
Event
</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script>
$(document).ready(function(){
	
	$("#p2").bind("blur",password_check);
	$("#uname_id").keyup(function(){
		$.post("check_user.php",{name:frm.uname.value},function(data){
			
			$("#feedback").html(data);
		});
	});
});	
	function password_check(){
		var p1=$("#p1").val();
	var p2=$("#p2").val();
	if(p1!=p2)
	{
		$("#pass_err").html("Mismatch Password");
	}
	else
	{
		$("#pass_err").html("");
		$("#pass_err").html("Password Correct..");
	}
	}
</script>
</head>
<body>

<div id="nav">
<center>
<ul id="navul">

<li><a href="logout1.php">Logout</a></li>
</ul>
</center>
</div>
<div id="container">
<h1>New User Registration</h1>
<fieldset id="user_login">
<legend>New User</legend>
<span id="feedback" style="margin:10px;">

<?php   
if(isset($_GET["err"]))
{
echo "<p style='color:red;'>".$_GET['err']."</p>";
}
 ?></span>
<form method="post" name="frm" action="new_user.php"  autocomplete="off">
<table id="user_table">
<tr> 
		<td>Name:</td>
		<td><input type="text" name="name" required></td>
	</tr>
	<tr> 
		<td>User Name:</td>
		<td><input type="text" name="uname" id="uname_id" required></td>
	</tr>
	<tr> 
		<td>Email id:</td>
		<td><input type="email" name="email" required></td>
	</tr>
	<tr> 
		<td>Password:</td>
		<td><input type="password" name="pass1" id="p1" required></td>
		<td>
			<i class="error" id="pass_err"></i>
			<i class="correct" id="pass_crr"></i>
		</td>
	</tr>
	<tr> 
		<td>Confirm Password:</td>
		<td><input type="password" name="pass2" id="p2" required></td>
	</tr>
	<tr> 
		<td>Security Question:</td>
		<td>
		<select name="que">
		<option value="What is your Pet?">What is your Pet?</option>
		<option value="What is your Fav Color?">What is your Fav Color?</option>
		<option value="What is your Fav Bike?">What is your Fav Bike?</option>
		<option value="What is your Fav Pen?">What is your Fav Pen?</option>
		<option value="What is your Pet Name?">What is your Pet Name?</option>
		</select>
		</td>
	</tr>
	
	
	<tr>
	<td>Your Answer</td>
	<td><input type="text" name="ans" ></td>
	</tr>
	<tr> 
		<td><input type="submit" id="sbtn" value="Save" name="submit"></td>
		<td><input type="reset" id="rbtn" value="Clear"></td>
	</tr>
	<tr> 
		<td></td>
		<td><a href="customer_login.php">Already User?</a></td>
		
	</tr>
	
</table>
</form>
</fieldset>

<?php

if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$pass1=$_POST["pass1"];
	$pass2=$_POST["pass2"];
	$que=$_POST["que"];
	$ans=$_POST["ans"];
	
	if($name!=""&&$uname!=""&&$email!=""&&$pass1!=""&&$pass2!=""&&$que!=""&&$ans!="")
	{
		if($pass1==$pass2)
		{
			$sql="INSERT INTO registration
			(NAME,USERNAME,PASSWORD,EMAIL,QUESTION,ANSWER)
			VALUES
			('$name','$uname','$pass1','$email','$que','$ans')";
			if($con->query($sql))
			{
				
				
				header("location:customer_home.php?mes=<p class='correct'>Member you are joined to tutor joe's.Please login here.</p>");
				
			}
			else
			{
				echo "<p class='error'>some error try again later.</p>";
			}
			
		}
	
		else
		{
			echo "<p class='error'>Confirm password and password must be same.</p>";
				

		}

	}
	else
	{
		echo "<p class='error'>all field are required.</p>";
		
	}
}
else
{
	echo "<p>Please fill all the Message";
}

?>
</div>
</body>
</html>