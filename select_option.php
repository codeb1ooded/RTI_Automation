<?php
 if(!isset($_SESSION)) {
	session_start();
}
?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/new_prev.css">
		<link rel="stylesheet" href="css/background.css">
	</head>
	
<?php

	$uname=$_SESSION['name'];
	if($uname=='Appellant'){
		include 'appellant_interface.php';

	}
	else{
	echo "<div class=new-prev>";
	echo "<marquee scrollamount=5><strong>PLEASE SELECT AN OPTION:</strong></marquee> <br><br><br>";
	echo "<div class=options>";

	if($uname=='ut'||$uname=='pc') {
		echo"<a href='./add_rti.html'>Add New RTI</a><br><br><br>
			 <a href='./report.php'>Generate Report</a><br><br><br>";
    }
		echo"<a href='./ongoing_rti.php'>Ongoing RTIs</a><br><br><br>
			 <a href='./view_closed_rti.php'>Closed RTIs</a>	
	</div>
	</div>";
}
include 'logoff.html';
?>