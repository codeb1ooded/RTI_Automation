<!DOCTYPE html>
<html>
	<head>
		<title>Completed RTI</title>
		<link rel="stylesheet" href="css/prev_rti.css">
	</head>
<body>
<?php
	$conn=mysqli_connect("localhost","root","");
	if(!$conn)
		echo " Connection to the server failed ";
	$db=mysqli_select_db($conn,'rti');
	if(!$db)
		echo " Connection to the database failed ";
	
	$query=" SELECT * FROM add_rti order by date_of_receipt_cio";
    $res=mysqli_query($conn,$query);
	echo "<table  width=100% border=2>" ;
	echo "<form method=post action='./back.php'><tr>
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
				echo "<td>".$r['id']."</td>";
				echo "<td>".$r['name']."</td>"; 
				echo "<td>".$r['address']."</td>"; 		
				echo "<td>".$r['phone_no']."</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
?>
	<input type="submit" name="back" value="Back" />
</body>
</html>