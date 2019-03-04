<?php 
	include"database.php";
	
	$sql="SELECT * FROM registration WHERE NAME LIKE '{$_POST["s"]}%' ";
	$res=$db->query($sql);
		echo "<table border='1px' class='table'>
				<tr>
					<th>S.No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>View</th>
					<th>Delete</th>
				</tr>
				";
	if($res->num_rows>0)
		
	{
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo "<tr>
				<td>{$i}</td>
				<td>{$row["NAME"]}</td>
				<td>{$row["EMAIL"]}</td>
				<td>{$row["ADDRESS"]}</td>
				<td><a href='customer_view.php?id={$row["ID"]}' class='btnb'>View</a></td>
				<td><a href='customer_delete.php?id={$row["ID"]}' class='btnr'>Delete</a></td>
				</tr>
			";
		}
				echo "</table>";
	}
		
	else
	{
		echo "<p>No Record Found</p>";
	}
	
?>