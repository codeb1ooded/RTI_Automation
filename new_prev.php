<?php
 if(!isset($_SESSION)) {
	session_start();
}
?>
<html>
	<head>
		<title>View RTI</title>
		<link rel="stylesheet" href="css/new_prev.css">
		<link rel="stylesheet" href="css/background.css">
	</head>
	
<?php

	$uname=$_SESSION['name'];
	echo "<div class=new-prev>";
	echo "<marquee><strong>PLEASE SELECT ONE OF THE FOLLOWING OPTIONS:</strong></marquee> 
			<br><br><br>";
	echo "<div class=options>";
	if($uname=='ut'||$uname=='pc') {
		echo"<a href='./add_rti.php'>Add New RTI</a><br><br><br>
		<a href='./report.php' color=#ffffff>Generate Report</a><br><br><br>";
    }
		echo"	<a href='./prev_rti.php' color=#ffffff>Ongoing RTIs</a><br><br><br>
				<a href='./view_completed_rti.php' color=#ffffff>Closed RTIs</a>
				
	</div>
	</div>";
include 'logoff.html';
?>