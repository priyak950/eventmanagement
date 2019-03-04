<?php
	session_start();
	include("config.php");
?>

<html>
<head>
<title>
Event
</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>




<div id="comments">
<h1>FEEDBACK</h1>

<fieldset id="user_login">
<legend>User Comment</legend>
<form method="post" action="feedback.php" autocomplete="off">
<table id="user_table">
	<tr> 
		<td>Name:</td>
		<td><input type="text" name="name" required></td>
		
	</tr>
	<tr> 
		<td>Comment:</td>
		<td><textarea name="comment" required></textarea></td>
	</tr>
	<tr> 
		<td colspan="2"><input type="submit" name="submit" id="comm" value="Post Comment"></td>
		
	</tr>
	
	
</table>
</form>
</fieldset>
<?php
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$comment=$_POST["comment"];
	if($name!="" && $comment!="")
	{
		$sql="INSERT INTO comments (NAME,COMMENT,LOGS) VALUES ('$name','$comment',NOW())";
	
		if($con->query($sql))
		{
				
				
				header("location:customer_home.php?mes=<p class='correct'>Please login here.</p>");
				
		}
		else
		{
			echo "<p class='error'>some error try again later.</p>";
		}
			
	}
	
}
	

$sql="SELECT * FROM comments ORDER BY ID DESC";
$result=$con->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<p><b style='color:#7f8fa6;'>{$row["NAME"]}</b>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i style='color:orange;'>{$row["LOGS"]}</i></p>
	<p>{$row["COMMENT"]}</p>
		<hr>";
	}
	
}
else
{
	echo "<p>No Comments Yet...!";
}
?>
</div>

</body>
</html>