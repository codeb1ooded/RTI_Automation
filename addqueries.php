<!DOCTYPE html>
	<head>
		<title>Add Queries</title>
		<link rel="stylesheet" href="css/background.css">
		<meta charset="utf-8">
	</head>
		
	<body>
	<?php

	include 'config_database.php'; 
	$id = $_GET['id'];
	session_start();
	$_SESSION['oid']=$id;
	mysqli_select_db($con, "rti");
			
	echo "<form action=ques1.php method=post>";
	echo "The id of this RTI is: ".$id;
	echo "<tr>
			<th><h3>No. of Queries</h3></th>
			<th><input type=text name=ques></th>
			<th><input type=submit name=enter value='Enter'></th>
		</tr></form>";
	$con->close();
?>
</body>
</html>