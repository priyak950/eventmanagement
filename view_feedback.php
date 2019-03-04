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
<h1>View Feedback</h1>




		
	
<?php
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$comment=$_POST["comment"];
	if($name!="" && $comment!="")
	{
	$sql="INSERT INTO comments (NAME,COMMENT,LOGS) VALUES ('$name','$comment',NOW())";
	
	$con->query($sql);
	}
	else
	{
		echo "<p class='error'>Please Fill All The Details and Must Login</p>";
	}
}
	

$sql="SELECT * FROM comments ORDER BY ID DESC";
$result=$con->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo "<p><b style='color:lime;'>{$row["NAME"]}</b>
		
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