<html>
	<head>
		<link rel="stylesheet" href="css/background.css">
	</head>
<body>
	<?php
		$id=$_GET['id'];
		include 'config_database.php'; 
		$sql="UPDATE add_rti SET archieve=1 WHERE id=".$id;
		mysqli_query($con,$sql);
	?>
	<h2>RTI Closed Succesfully</h2>
	<span><a href='show_prev_rti.php' class=btn >Back</a></span>
	<?php
	mysqli_close($con);
	?>
</body>
</html>