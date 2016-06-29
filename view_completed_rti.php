<!DOCTYPE html>
<html>
	<head>
		<title>Completed RTI</title>
		<link rel="stylesheet" href="css/prev_rti.css">
	</head>
<body>
<?php
	include 'config_database.php'; 
	
	$query=" SELECT * FROM add_rti order by date_of_receipt_cio";
    $res=mysqli_query($conn,$query);
    echo "<h2>CLOSED RTIs</h2>" ;
    echo "<marquee><strong>CHOOSE THE CLOSED RTI TO BE VIEWED: </strong></marquee><br><br>";
	echo "<table  width=100% border=2>" ;
	echo "<tr>
			<th>ID</th>
			<th>Applicant Name</th>
			<th>Address</th>
			<th>Phone Number</th>
		</tr>"; 	
	while($r=mysqli_fetch_assoc($res))
	{
		if($r['archieve']==1)
		{			
			echo "<tr>";
				echo "<td><a href='compid.php?id=".$r['id']."'>".$r['id']."</a></td>";
				echo "<td><a href='compid.php?id=".$r['id']."'>".$r['name']."</a></td>"; 
				echo "<td><a href='compid.php?id=".$r['id']."'>".$r['address']."</a></td>"; 		
				echo "<td><a href='compid.php?id=".$r['id']."'>".$r['phone_no']."</a></td>";
			echo "</tr>";
		}
	}
	echo "</table>";
?>
	<br><a href="new_prev.php">Back</a>
</body>
</html>