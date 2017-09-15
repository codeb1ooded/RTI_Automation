	<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	if (!isset($_SESSION['login_access'])){
		header("location: no_file.php");
	}
	else {
		?>
		<html>
		<head>
			<title>Home</title>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link rel = "stylesheet" type = "text/css" href = "css/a.css" />

		</head>
		<?php
// Variable $login_access defines which type of user is logged in and then give response of the page as per that
		$login_access = $_SESSION['login_access'];
		if($login_access == 'Appellant'){
			header("location: appellant_interface/appellant_interface.php");
		}
		else {
			if ($login_access == 'Admin') {
				echo "<br><h2><center>PLEASE SELECT AN OPTION:</center></h2><br>";
				echo "<center>";
				echo "<a href='./add_rti/add_rti.php' class='btn btn-primary'>Add New RTI</a>
				<a href='./ongoing_rti/ongoing_rti.php' class='btn btn-primary'>Ongoing RTIs</a>
				<a href='./completed_rti/completed_rti.php'class='btn btn-primary'>Completed RTIs</a>
				<a href='./completed_rti/view_closed_rti.php' class='btn btn-primary'>Closed RTIs</a>
				<a href='./report/report.php' class='btn btn-primary'>Generate Report</a>
				<a href='./backup/backup_ask_user.php' class='btn btn-primary'>Create Backup</a>
				<a href='./logging/change_password.php'class='btn btn-primary'>Change Password</a>
				<br><br><br></center>";
			}
			else{
				header("location: ongoing_rti/ongoing_rti.php");
			}
			echo"<center><a href='logout.php' class='btn btn-log'>Logout</a></center>";
		}
	}
	?>