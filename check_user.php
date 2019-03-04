<?php
include("config.php");
if(isset($_POST["name"]))
{
	$name=$_POST["name"];
	if(strlen($name)>6)
	{
		$sql="SELECT USERNAME FROM registration WHERE USERNAME='$name'";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
			echo"<i style='color:red;'>User name already taken try another one</i>";
		}
		else
		{
			echo"<i style='color:green;'>User name is available</i>";
		}
	}
	else
	{
			echo "Please enter user name which has more than 6 characters";
	}
}
else
{
	header("location:new_user.php?err=Please Register Here");
}

?>