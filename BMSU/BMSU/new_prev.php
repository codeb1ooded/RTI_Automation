<html>
	<head>
			<title>View RTI</title>
		<link rel="stylesheet" href="css/new_prev.css">
	</head>
<?php
	echo "<div class=new-prev>";
	echo "<marquee><strong>PLEASE SELECT ONE OF THE FOLLOWING OPTION:</strong></marquee> 
			<br><br><br>";
	echo "<div class=options>
			<a href='./add_rti.php'>Add New RTI</a><br><br><br>
			<a href='./prev_rti.php' color=#ffffff>Ongoing RTIs</a><br><br><br>
			<a href='./view_completed_rti.php' color=#ffffff>Closed RTIs</a><br><br><br>
			<a href='./report.php' color=#ffffff>Generate Report</a>
	</div>
	</div>";
include 'logoff.html';
?>