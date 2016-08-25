<?php
if(!isset($_SESSION) || !isset($_SESSION['Account_type'])) {
	// echo 'session not started';
    include 'index.php';
    echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Please login first"; document.getElementById("message").style.color = "#ff0000";</script>';
}
else{
?>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" href="css/background.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php
	include 'config_database.php';
	echo "<div class='container'>";
	echo "<h2>CHANGE PASSWORD</h2>" ;
	echo "<marquee><strong>SELECT THE USER WHOSE PASSWORD NEEDS TO BE MODIFIED: </strong></marquee><br><br>";
	$query=" SELECT * FROM login;";
	$res= mysqli_query($con, $query);
	echo "<table class=table table-bordered table-condensed>" ;
	echo "<tr>
		<th>ID</th>
		<th>User Name</th>
		<th>Options</th>
		</tr>";

	while($r=mysqli_fetch_assoc($res))
	{
		echo "<tr>";
				echo "<td>".$r['id']."</td>";
				echo "<td>".$r['name']."</td>";
				echo "<td><a href='forgot_password.php?id=".$r['id']."'>Select this USER</a></td>";
				echo "</tr>";
	}
	echo "</table>";
?>
	<br><a href="select_option.php" class=btn>Back</a>
</div>
</body>
</html>
<?php } ?>
